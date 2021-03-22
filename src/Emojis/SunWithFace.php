<?php

namespace Wnx\Emojis\Emojis;

/**
 * SunWithFace Emoji class.
 *
 * @version v13.1
 *
 **/
class SunWithFace {

    public const SYMBOL = "🌞";

    public const HEX = "1F31E";

    public const CODE = "\u{1F31E}";

    public const NAME = 'sun with face';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'sky & weather';

    public const NAME_WITH_UNDERSCORES = 'sun_with_face';

    public const TAGS = 'summer';

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
