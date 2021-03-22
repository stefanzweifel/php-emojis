<?php

namespace Wnx\Emojis\Emojis;

/**
 * DiamondWithADot Emoji class.
 *
 * @version v13.1
 *
 **/
class DiamondWithADot {

    public const SYMBOL = "💠";

    public const HEX = "1F4A0";

    public const CODE = "\u{1F4A0}";

    public const NAME = 'diamond with a dot';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'geometric';

    public const NAME_WITH_UNDERSCORES = 'diamond_with_a_dot';

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
