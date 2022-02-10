<?php

namespace Wnx\Emojis\Emojis;

/**
 * WaterCloset Emoji class.
 *
 * @version v14.0
 *
 **/
class WaterCloset
{

    public const SYMBOL = "🚾";

    public const HEX = "1F6BE";

    public const CODE = "\u{1F6BE}";

    public const NAME = 'water closet';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'transport-sign';

    public const NAME_WITH_UNDERSCORES = 'water_closet';

    public const TAGS = 'toilet restroom';

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
