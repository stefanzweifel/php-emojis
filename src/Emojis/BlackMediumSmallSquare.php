<?php

namespace Wnx\Emojis\Emojis;

/**
 * BlackMediumSmallSquare Emoji class.
 *
 * @version v13.1
 *
 **/
class BlackMediumSmallSquare {

    public const SYMBOL = "◾";

    public const HEX = "25FE";

    public const CODE = "\u{25FE}";

    public const NAME = 'black medium-small square';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'geometric';

    public const NAME_WITH_UNDERSCORES = 'black_medium-small_square';

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
