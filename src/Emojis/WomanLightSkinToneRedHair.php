<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanLightSkinToneRedHair Emoji class.
 *
 * @version v14.0
 *
 **/
class WomanLightSkinToneRedHair
{

    public const SYMBOL = "👩🏻‍🦰";

    public const HEX = "1F469 1F3FB 200D 1F9B0";

    public const CODE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F9B0}";

    public const NAME = 'woman light skin tone red hair';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person';

    public const NAME_WITH_UNDERSCORES = 'woman_light_skin_tone_red_hair';

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
