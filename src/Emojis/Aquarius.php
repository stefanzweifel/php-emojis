<?php

namespace Wnx\Emojis\Emojis;

/**
 * Aquarius Emoji class.
 *
 * @version v14.0
 *
 **/
class Aquarius
{

    public const SYMBOL = "♒";

    public const HEX = "2652";

    public const CODE = "\u{2652}";

    public const NAME = 'Aquarius';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'zodiac';

    public const NAME_WITH_UNDERSCORES = 'Aquarius';

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
