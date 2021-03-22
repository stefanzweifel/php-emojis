<?php

namespace Wnx\Emojis\Emojis;

/**
 * Taurus Emoji class.
 *
 * @version v13.1
 *
 **/
class Taurus {

    public const SYMBOL = "♉";

    public const HEX = "2649";

    public const CODE = "\u{2649}";

    public const NAME = 'Taurus';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'zodiac';

    public const NAME_WITH_UNDERSCORES = 'Taurus';

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
