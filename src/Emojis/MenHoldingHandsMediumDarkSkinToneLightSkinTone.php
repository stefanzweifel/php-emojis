<?php

namespace Wnx\Emojis\Emojis;

/**
 * MenHoldingHandsMediumDarkSkinToneLightSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class MenHoldingHandsMediumDarkSkinToneLightSkinTone {

    public const SYMBOL = "👨🏾‍🤝‍👨🏻";

    public const HEX = "1F468 1F3FE 200D 1F91D 200D 1F468 1F3FB";

    public const CODE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FB}";

    public const NAME = 'men holding hands medium-dark skin tone light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'family';

    public const NAME_WITH_UNDERSCORES = 'men_holding_hands_medium-dark_skin_tone_light_skin_tone';

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
