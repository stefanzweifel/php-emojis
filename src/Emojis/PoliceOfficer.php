<?php

namespace Wnx\Emojis\Emojis;

/**
 * PoliceOfficer Emoji class.
 *
 * @version v13.1
 *
 **/
class PoliceOfficer {

    public const SYMBOL = "👮";

    public const HEX = "1F46E";

    public const CODE = "\u{1F46E}";

    public const NAME = 'police officer';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'police_officer';

    public const TAGS = 'law';

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
