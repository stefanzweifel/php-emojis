<?php

namespace Wnx\Emojis\Emojis;

/**
 * SportUtilityVehicle Emoji class.
 *
 * @version v13.1
 *
 **/
class SportUtilityVehicle {

    public const SYMBOL = "🚙";

    public const HEX = "1F699";

    public const CODE = "\u{1F699}";

    public const NAME = 'sport utility vehicle';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'transport-ground';

    public const NAME_WITH_UNDERSCORES = 'sport_utility_vehicle';

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
