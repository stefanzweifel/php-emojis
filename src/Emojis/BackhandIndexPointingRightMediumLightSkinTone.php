<?php

namespace Wnx\Emojis\Emojis;

/**
 * BackhandIndexPointingRightMediumLightSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class BackhandIndexPointingRightMediumLightSkinTone
{
    public const SYMBOL = "👉🏼";

    public const HEX = "1F449 1F3FC";

    public const CODE = "\u{1F449}\u{1F3FC}";

    public const NAME = 'backhand index pointing right medium-light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-single-finger';

    public const NAME_WITH_UNDERSCORES = 'backhand_index_pointing_right_medium-light_skin_tone';

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
