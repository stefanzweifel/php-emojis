<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanSwimmingLightSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class WomanSwimmingLightSkinTone {

    public const SYMBOL = "🏊🏻‍♀️";

    public const HEX = "1F3CA 1F3FB 200D 2640 FE0F";

    public const CODE = "\u{1F3CA}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";

    public const NAME = 'woman swimming light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-sport';

    public const NAME_WITH_UNDERSCORES = 'woman_swimming_light_skin_tone';

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
