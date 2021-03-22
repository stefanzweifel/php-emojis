<?php

namespace Wnx\Emojis\Emojis;

/**
 * UmbrellaWithRainDrops Emoji class.
 *
 * @version v13.1
 *
 **/
class UmbrellaWithRainDrops {

    public const SYMBOL = "☔";

    public const HEX = "2614";

    public const CODE = "\u{2614}";

    public const NAME = 'umbrella with rain drops';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'sky & weather';

    public const NAME_WITH_UNDERSCORES = 'umbrella_with_rain_drops';

    public const TAGS = 'rain weather';

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
