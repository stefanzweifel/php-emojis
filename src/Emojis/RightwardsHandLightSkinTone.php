<?php

namespace Wnx\Emojis\Emojis;

/**
 * RightwardsHandLightSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class RightwardsHandLightSkinTone
{

    public const SYMBOL = "🫱🏻";

    public const HEX = "1FAF1 1F3FB";

    public const CODE = "\u{1FAF1}\u{1F3FB}";

    public const NAME = 'rightwards hand light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-open';

    public const NAME_WITH_UNDERSCORES = 'rightwards_hand_light_skin_tone';

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
