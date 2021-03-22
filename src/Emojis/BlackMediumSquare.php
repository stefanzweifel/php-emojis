<?php

namespace Wnx\Emojis\Emojis;

/**
 * BlackMediumSquare Emoji class.
 *
 * @version v13.1
 *
 **/
class BlackMediumSquare
{
    public const SYMBOL = "◼️";

    public const HEX = "25FC FE0F";

    public const CODE = "\u{25FC}\u{FE0F}";

    public const NAME = 'black medium square';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'geometric';

    public const NAME_WITH_UNDERSCORES = 'black_medium_square';

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
