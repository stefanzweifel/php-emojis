<?php

namespace Wnx\Emojis\Emojis;

/**
 * WritingHandMediumLightSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class WritingHandMediumLightSkinTone
{

    public const SYMBOL = "✍🏼";

    public const HEX = "270D 1F3FC";

    public const CODE = "\u{270D}\u{1F3FC}";

    public const NAME = 'writing hand medium-light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-prop';

    public const NAME_WITH_UNDERSCORES = 'writing_hand_medium-light_skin_tone';

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
