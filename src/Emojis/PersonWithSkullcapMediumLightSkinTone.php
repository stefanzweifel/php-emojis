<?php

namespace Wnx\Emojis\Emojis;

/**
 * PersonWithSkullcapMediumLightSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class PersonWithSkullcapMediumLightSkinTone
{

    public const SYMBOL = "👲🏼";

    public const HEX = "1F472 1F3FC";

    public const CODE = "\u{1F472}\u{1F3FC}";

    public const NAME = 'person with skullcap medium-light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'person_with_skullcap_medium-light_skin_tone';

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
