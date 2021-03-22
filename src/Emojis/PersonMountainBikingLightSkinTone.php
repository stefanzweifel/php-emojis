<?php

namespace Wnx\Emojis\Emojis;

/**
 * PersonMountainBikingLightSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class PersonMountainBikingLightSkinTone {

    public const SYMBOL = "🚵🏻";

    public const HEX = "1F6B5 1F3FB";

    public const CODE = "\u{1F6B5}\u{1F3FB}";

    public const NAME = 'person mountain biking light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-sport';

    public const NAME_WITH_UNDERSCORES = 'person_mountain_biking_light_skin_tone';

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
