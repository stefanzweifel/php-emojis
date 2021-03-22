<?php

namespace Wnx\Emojis\Emojis;

/**
 * ManGettingHaircutMediumSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class ManGettingHaircutMediumSkinTone {

    public const SYMBOL = "💇🏽‍♂️";

    public const HEX = "1F487 1F3FD 200D 2642 FE0F";

    public const CODE = "\u{1F487}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";

    public const NAME = 'man getting haircut medium skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-activity';

    public const NAME_WITH_UNDERSCORES = 'man_getting_haircut_medium_skin_tone';

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
