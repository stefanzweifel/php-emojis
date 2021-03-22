<?php

namespace Wnx\Emojis\Emojis;

/**
 * RacingCar Emoji class.
 *
 * @version v13.1
 *
 **/
class RacingCar {

    public const SYMBOL = "🏎️";

    public const HEX = "1F3CE FE0F";

    public const CODE = "\u{1F3CE}\u{FE0F}";

    public const NAME = 'racing car';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'transport-ground';

    public const NAME_WITH_UNDERSCORES = 'racing_car';

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
