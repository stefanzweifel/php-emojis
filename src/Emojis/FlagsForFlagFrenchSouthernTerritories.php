<?php

namespace Wnx\Emojis\Emojis;

/**
 * FlagsForFlagFrenchSouthernTerritories Emoji class.
 *
 * @version v13.1
 *
 **/
class FlagsForFlagFrenchSouthernTerritories {

    public const SYMBOL = "🇹🇫";

    public const HEX = "1F1F9 1F1EB";

    public const CODE = "\u{1F1F9}\u{1F1EB}";

    public const NAME = 'flags for flag French Southern Territories';

    public const GROUP = 'Flags';

    public const SUBGROUP = 'country-flag';

    public const NAME_WITH_UNDERSCORES = 'flags_for_flag_French_Southern_Territories';

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
