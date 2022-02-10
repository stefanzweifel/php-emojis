<?php

namespace Wnx\Emojis\Emojis;

/**
 * FountainPen Emoji class.
 *
 * @version v14.0
 *
 **/
class FountainPen
{

    public const SYMBOL = "🖋️";

    public const HEX = "1F58B FE0F";

    public const CODE = "\u{1F58B}\u{FE0F}";

    public const NAME = 'fountain pen';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'writing';

    public const NAME_WITH_UNDERSCORES = 'fountain_pen';

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
