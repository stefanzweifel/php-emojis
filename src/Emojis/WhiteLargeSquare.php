<?php

namespace Wnx\Emojis\Emojis;

/**
 * WhiteLargeSquare Emoji class.
 *
 * @version v13.1
 *
 **/
class WhiteLargeSquare {

    public const SYMBOL = "⬜";

    public const HEX = "2B1C";

    public const CODE = "\u{2B1C}";

    public const NAME = 'white large square';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'geometric';

    public const NAME_WITH_UNDERSCORES = 'white_large_square';

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