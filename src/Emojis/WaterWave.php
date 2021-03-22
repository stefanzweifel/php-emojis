<?php

namespace Wnx\Emojis\Emojis;

/**
 * WaterWave Emoji class.
 *
 * @version v13.1
 *
 **/
class WaterWave
{
    public const SYMBOL = "🌊";

    public const HEX = "1F30A";

    public const CODE = "\u{1F30A}";

    public const NAME = 'water wave';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'sky & weather';

    public const NAME_WITH_UNDERSCORES = 'water_wave';

    public const TAGS = 'sea';

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
