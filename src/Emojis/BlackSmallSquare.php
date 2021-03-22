<?php

namespace Wnx\Emojis\Emojis;

/**
 * BlackSmallSquare Emoji class.
 *
 * @version v13.1
 *
 **/
class BlackSmallSquare {

    public const SYMBOL = "▪️";

    public const HEX = "25AA FE0F";

    public const CODE = "\u{25AA}\u{FE0F}";

    public const NAME = 'black small square';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'geometric';

    public const NAME_WITH_UNDERSCORES = 'black_small_square';

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
