<?php

namespace Wnx\Emojis\Emojis;

/**
 * PalmDownHandMediumLightSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class PalmDownHandMediumLightSkinTone
{

    public const SYMBOL = "🫳🏼";

    public const HEX = "1FAF3 1F3FC";

    public const CODE = "\u{1FAF3}\u{1F3FC}";

    public const NAME = 'palm down hand medium-light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-open';

    public const NAME_WITH_UNDERSCORES = 'palm_down_hand_medium-light_skin_tone';

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
