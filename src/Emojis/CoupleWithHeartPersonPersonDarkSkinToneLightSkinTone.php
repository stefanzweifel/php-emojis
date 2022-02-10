<?php

namespace Wnx\Emojis\Emojis;

/**
 * CoupleWithHeartPersonPersonDarkSkinToneLightSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class CoupleWithHeartPersonPersonDarkSkinToneLightSkinTone
{

    public const SYMBOL = "🧑🏿‍❤️‍🧑🏻";

    public const HEX = "1F9D1 1F3FF 200D 2764 FE0F 200D 1F9D1 1F3FB";

    public const CODE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FB}";

    public const NAME = 'couple with heart person person dark skin tone light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'family';

    public const NAME_WITH_UNDERSCORES = 'couple_with_heart_person_person_dark_skin_tone_light_skin_tone';

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
