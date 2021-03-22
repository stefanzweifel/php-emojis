<?php

namespace Wnx\Emojis\Emojis;

/**
 * Rat Emoji class.
 *
 * @version v13.1
 *
 **/
class Rat
{
    public const SYMBOL = "🐀";

    public const HEX = "1F400";

    public const CODE = "\u{1F400}";

    public const NAME = 'rat';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'animal-mammal';

    public const NAME_WITH_UNDERSCORES = 'rat';

    public const TAGS = '';

    public function symbol(): string
    {
        return self::SYMBOL;
    }

    public function hex(): string
    {
        return self::HEX;
    }

    public function name(): string
    {
        return self::NAME;
    }

    public function group(): string
    {
        return self::GROUP;
    }

    public function subgroup(): string
    {
        return self::SUBGROUP;
    }

    public function name_with_underscores(): string
    {
        return self::NAME_WITH_UNDERSCORES;
    }

    public function tags(): string
    {
        return self::TAGS;
    }
}
