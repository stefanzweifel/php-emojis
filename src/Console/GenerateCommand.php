<?php

namespace Wnx\Emojis\Console;

use Illuminate\Support\Collection;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Wnx\Emojis\Emoji;
use Wnx\Emojis\Parser;

class GenerateCommand extends Command
{
    /** @var string */
    protected const EMOJI_VERSION = '13.1';

    /** @var int */
    protected $now;

    /** @var string */
    protected $deprecationNotice = '# deprecations' . PHP_EOL;

    /** @var Emoji[] */
    protected $emojis;

    /** @var array[] */
    protected $emojisArray;

    /** @var array[] */
    protected $groups;
    /**
     * @var Environment
     */
    private Environment $twig;

    private Collection $gemojis;

    protected function configure()
    {
        $this
            ->setName('generate')
            ->setDescription('Generate the package code from the emoji docs');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->setupTwigEnvironment();
        $this->loadGemojis();

        // Make Request to Unicode Website and get data for latest Unicode Release
        // TODO: Implement request to Unicode website
        $url = 'https://unicode.org/Public/emoji/' . self::EMOJI_VERSION . '/emoji-test.txt';


        // $remoteContent = file_get_contents($url);
        //file_put_contents(__DIR__ . '/../emoji-test.txt', $remoteContent);

        // Parse Response
        $body = file_get_contents(__DIR__ . '/../emoji-test.txt');

        $parser = new Parser($body);
        $parser->parse();

        $parser->getGroups()->each(function (array $subgroups, string $groupName) use ($url) {
            collect($subgroups)->each(function (array $emojis, string $subgroupName) use ($url, $groupName) {
                collect($emojis)->each(function (Emoji $emoji) use ($groupName, $subgroupName, $url) {
                    $this->generateEmojiPhpclass($emoji, $groupName, $subgroupName, $url);
                });
            });
        });

        return 0;
    }

    protected function setupTwigEnvironment(): void
    {
        $loader = new FilesystemLoader(__DIR__ . '/../Templates');

        $this->twig = new Environment($loader, [
            'cache' => false,
            'autoescape' => false,
        ]);
    }

    protected function loadGemojis(): void
    {
        $this->gemojis = collect(json_decode(file_get_contents(__DIR__ . '/../../node_modules/gemoji/index.json'), true));
    }

    protected function renderEmoji(string $code): string
    {
        return collect(explode(' ', $code))
            ->map(fn ($code) => str_pad($code, 8, '0', STR_PAD_LEFT))
            ->map(fn ($code) => mb_convert_encoding(hex2bin($code), 'UTF-8', 'UTF-32'))
            ->implode('');
    }

    /**
     * @param Emoji $emoji
     * @param string $groupName
     * @param string $subgroupName
     * @param string $url
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    protected function generateEmojiPhpclass(Emoji $emoji, string $groupName, string $subgroupName, string $url): void
    {
        $renderedEmoji = $this->renderEmoji($emoji->getHexCode());

        $class = $this->twig->load('EmojiClass.twig')->render([
            'className' => $emoji->getClassName(),
            'symbol' => $renderedEmoji,
            'hex' => $emoji->getHexCode(),
            'code' => $emoji->getCode(),
            'name' => $emoji->getName(),
            'nameWithUnderscores' => str_replace(' ', '_', $emoji->getName()),
            'group' => $groupName,
            'subgroup' => $subgroupName,
            'tags' => $this->getTagsForEmoji($renderedEmoji),
            'url' => $url,
            'version' => 'v' . self::EMOJI_VERSION,
        ]);

        file_put_contents(__DIR__ . "/../Emojis/{$emoji->getClassName()}.php", $class);
    }

    protected function getTagsForEmoji($symbol): string
    {
        $filteredEmojis = $this->gemojis->filter(fn ($gemoji) => $gemoji['emoji'] == $symbol);

        if ($filteredEmojis->count() === 0) {
            return '';
        }

        return implode(' ', $filteredEmojis->first()['tags']);
    }
}
