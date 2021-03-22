<?php

namespace Wnx\Emojis\Emojis;

/**
 * SmallAirplane Emoji class.
 *
 * @version v13.1
 *
 **/
class SmallAirplane
{
    public const SYMBOL = "🛩️";

    public const HEX = "1F6E9 FE0F";

    public const CODE = "\u{1F6E9}\u{FE0F}";

    public const NAME = 'small airplane';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'transport-air';

    public const NAME_WITH_UNDERSCORES = 'small_airplane';

    public const TAGS = 'flight';

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
