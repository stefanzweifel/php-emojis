<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanMechanicMediumLightSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class WomanMechanicMediumLightSkinTone
{

    public const SYMBOL = "👩🏼‍🔧";

    public const HEX = "1F469 1F3FC 200D 1F527";

    public const CODE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F527}";

    public const NAME = 'woman mechanic medium-light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'woman_mechanic_medium-light_skin_tone';

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
