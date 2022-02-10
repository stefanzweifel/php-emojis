<?php

namespace Wnx\Emojis\Emojis;

/**
 * PoliceCarLight Emoji class.
 *
 * @version v14.0
 *
 **/
class PoliceCarLight
{

    public const SYMBOL = "🚨";

    public const HEX = "1F6A8";

    public const CODE = "\u{1F6A8}";

    public const NAME = 'police car light';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'transport-ground';

    public const NAME_WITH_UNDERSCORES = 'police_car_light';

    public const TAGS = '911 emergency';

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
