<?php

namespace Wnx\Emojis\Emojis;

/**
 * ManClimbingMediumLightSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class ManClimbingMediumLightSkinTone
{
    public const SYMBOL = "🧗🏼‍♂️";

    public const HEX = "1F9D7 1F3FC 200D 2642 FE0F";

    public const CODE = "\u{1F9D7}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";

    public const NAME = 'man climbing medium-light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-activity';

    public const NAME_WITH_UNDERSCORES = 'man_climbing_medium-light_skin_tone';

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
