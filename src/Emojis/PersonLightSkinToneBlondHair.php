<?php

namespace Wnx\Emojis\Emojis;

/**
 * PersonLightSkinToneBlondHair Emoji class.
 *
 * @version v13.1
 *
 **/
class PersonLightSkinToneBlondHair
{
    public const SYMBOL = "👱🏻";

    public const HEX = "1F471 1F3FB";

    public const CODE = "\u{1F471}\u{1F3FB}";

    public const NAME = 'person light skin tone blond hair';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person';

    public const NAME_WITH_UNDERSCORES = 'person_light_skin_tone_blond_hair';

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
