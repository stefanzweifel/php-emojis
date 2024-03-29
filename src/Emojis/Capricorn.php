<?php

namespace Wnx\Emojis\Emojis;

/**
 * Capricorn Emoji class.
 *
 * @version v14.0
 *
 **/
class Capricorn
{

    public const SYMBOL = "♑";

    public const HEX = "2651";

    public const CODE = "\u{2651}";

    public const NAME = 'Capricorn';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'zodiac';

    public const NAME_WITH_UNDERSCORES = 'Capricorn';

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
