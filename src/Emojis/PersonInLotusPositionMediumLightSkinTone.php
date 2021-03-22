<?php

namespace Wnx\Emojis\Emojis;

/**
 * PersonInLotusPositionMediumLightSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class PersonInLotusPositionMediumLightSkinTone {

    public const SYMBOL = "🧘🏼";

    public const HEX = "1F9D8 1F3FC";

    public const CODE = "\u{1F9D8}\u{1F3FC}";

    public const NAME = 'person in lotus position medium-light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-resting';

    public const NAME_WITH_UNDERSCORES = 'person_in_lotus_position_medium-light_skin_tone';

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