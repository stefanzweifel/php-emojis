<?php

namespace Wnx\Emojis\Emojis;

/**
 * BackhandIndexPointingLeftMediumSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class BackhandIndexPointingLeftMediumSkinTone
{

    public const SYMBOL = "👈🏽";

    public const HEX = "1F448 1F3FD";

    public const CODE = "\u{1F448}\u{1F3FD}";

    public const NAME = 'backhand index pointing left medium skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-single-finger';

    public const NAME_WITH_UNDERSCORES = 'backhand_index_pointing_left_medium_skin_tone';

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
