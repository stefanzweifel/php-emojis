<?php

namespace Wnx\Emojis\Emojis;

/**
 * PersonFacepalmingMediumSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class PersonFacepalmingMediumSkinTone {

    public const SYMBOL = "🤦🏽";

    public const HEX = "1F926 1F3FD";

    public const CODE = "\u{1F926}\u{1F3FD}";

    public const NAME = 'person facepalming medium skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-gesture';

    public const NAME_WITH_UNDERSCORES = 'person_facepalming_medium_skin_tone';

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
