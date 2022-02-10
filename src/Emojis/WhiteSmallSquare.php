<?php

namespace Wnx\Emojis\Emojis;

/**
 * WhiteSmallSquare Emoji class.
 *
 * @version v14.0
 *
 **/
class WhiteSmallSquare
{

    public const SYMBOL = "▫️";

    public const HEX = "25AB FE0F";

    public const CODE = "\u{25AB}\u{FE0F}";

    public const NAME = 'white small square';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'geometric';

    public const NAME_WITH_UNDERSCORES = 'white_small_square';

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
