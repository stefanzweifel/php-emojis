<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanPoliceOfficer Emoji class.
 *
 * @version v14.0
 *
 **/
class WomanPoliceOfficer
{

    public const SYMBOL = "👮‍♀️";

    public const HEX = "1F46E 200D 2640 FE0F";

    public const CODE = "\u{1F46E}\u{200D}\u{2640}\u{FE0F}";

    public const NAME = 'woman police officer';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'woman_police_officer';

    public const TAGS = 'law cop';

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
