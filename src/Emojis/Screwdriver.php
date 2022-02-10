<?php

namespace Wnx\Emojis\Emojis;

/**
 * Screwdriver Emoji class.
 *
 * @version v14.0
 *
 **/
class Screwdriver
{

    public const SYMBOL = "🪛";

    public const HEX = "1FA9B";

    public const CODE = "\u{1FA9B}";

    public const NAME = 'screwdriver';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'tool';

    public const NAME_WITH_UNDERSCORES = 'screwdriver';

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
