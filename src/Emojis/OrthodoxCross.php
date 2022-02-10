<?php

namespace Wnx\Emojis\Emojis;

/**
 * OrthodoxCross Emoji class.
 *
 * @version v14.0
 *
 **/
class OrthodoxCross
{

    public const SYMBOL = "☦️";

    public const HEX = "2626 FE0F";

    public const CODE = "\u{2626}\u{FE0F}";

    public const NAME = 'orthodox cross';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'religion';

    public const NAME_WITH_UNDERSCORES = 'orthodox_cross';

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
