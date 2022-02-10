<?php

namespace Wnx\Emojis\Emojis;

/**
 * RightFacingFistMediumLightSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class RightFacingFistMediumLightSkinTone
{

    public const SYMBOL = "🤜🏼";

    public const HEX = "1F91C 1F3FC";

    public const CODE = "\u{1F91C}\u{1F3FC}";

    public const NAME = 'right-facing fist medium-light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-closed';

    public const NAME_WITH_UNDERSCORES = 'right-facing_fist_medium-light_skin_tone';

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
