<?php

namespace Wnx\Emoji\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Wnx\Emoji\Emoji;
use Wnx\Emoji\Parser;

class GenerateCommand extends Command
{
    /** @var string */
    protected const EMOJI_VERSION = '13.1';

    /** @var int */
    protected $now;

    /** @var string */
    protected $deprecationNotice = '# deprecations' . PHP_EOL;

    /** @var \Spatie\Emoji\Generator\Emoji[] */
    protected $emojis;

    /** @var array[] */
    protected $emojisArray;

    /** @var array[] */
    protected $groups;

    protected function configure()
    {
        $this
            ->setName('generate')
            ->setDescription('Generate the package code from the emoji docs');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // Make Request to Unicode Website and get data for latest Unicode Release
        // TODO: Implement request to Unicode website
        $url = 'https://unicode.org/Public/emoji/' . self::EMOJI_VERSION . '/emoji-test.txt';

        // Parse Response
        $body = file_get_contents(__DIR__ . '/../emoji-test.txt');

        $parser = new Parser($body);
        $parser->parse();

        /**
         * @var string $groupName
        * @var array $subgroups
         */
        foreach ($parser->getGroups() as $groupName => $subgroups) {

            /**
             * @var string $subgroupName
             * @var array  $emojis
             */
            foreach ($subgroups as $subgroupName => $emojis) {

                /** @var Emoji $emoji */
                foreach ($emojis as $emoji) {

                    $loader = new FilesystemLoader(__DIR__ . '/../Templates');
                    $twig = new Environment($loader, [
                        'cache' => false,
                        'autoescape' => false,
                    ]);

                    $code = $emoji->getCode();

                    $class = $twig->load('EmojiClass.twig')->render([
                        'className' => $emoji->getClassName(),
                        'symbol' => $this->renderEmojiOutput($emoji->getCode()),
                        'hex' => $emoji->getHexCode(),
                        'code' => $emoji->getCode(),
                        'name' => $emoji->getName(),
                        'nameWithUnderscores' => str_replace(' ', '_', $emoji->getName()),
                        'group' => $groupName,
                        'subgroup' => $subgroupName,
                        'tags' => '',
                        'url' => $url,
                        'version' => 'v' . self::EMOJI_VERSION,
                        'loaded_at' => time(),
                    ]);

                    file_put_contents(__DIR__ . "/../Emojis/{$emoji->getClassName()}.php", $class);
                }
            }
        }

        die(var_dump('✓ done'));


//        $body = file_get_contents(__DIR__. '/../../node_modules/gemoji/index.json');
//        $emojis = json_decode($body, true);


//        $this->now = time();
//        $output->writeln('Generating package code...');
//
//        $output->writeln('Load file...');
//        $url = 'https://unicode.org/Public/emoji/'.self::EMOJI_VERSION.'/emoji-test.txt';
//        $body = $this->retrieveRemoteFile($url);
//
//        $output->writeln('Parse response...');
//        $this->parseResponse($body);
//        $this->deprecatedConstants();
//        $this->deprecatedMethods();
//        file_put_contents(__DIR__.'/../temp/'.date('Y_m_d-H_i_s', $this->now).'_deprecations.md', $this->deprecationNotice);
//
//        $output->writeln('Generate class...');
//        $this->writeClass($url);
//
//        $output->writeln('Done!');

        return 0;
    }

    public static function renderEmojiOutput($emoji)
    {
        ob_start();
        echo $emoji;
        $renderedEmoji = ob_get_contents();
        ob_end_clean();

        return $renderedEmoji;
    }

    protected function renderEmoji(string $code): string
    {
        var_dump($code);
        $match = [$code];

        $hex4 = str_pad(array_pop($match), 8, '0', STR_PAD_LEFT);
        return mb_convert_encoding(hex2bin($hex4), 'UTF-8', 'UTF-32');
    }
}