<?php

namespace Wnx\Emojis\Emojis;

/**
 * IndexPointingUpMediumLightSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class IndexPointingUpMediumLightSkinTone {

    public const SYMBOL = "☝🏼";

    public const HEX = "261D 1F3FC";

    public const CODE = "\u{261D}\u{1F3FC}";

    public const NAME = 'index pointing up medium-light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-single-finger';

    public const NAME_WITH_UNDERSCORES = 'index_pointing_up_medium-light_skin_tone';

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