<?php

namespace Wnx\Emojis\Emojis;

/**
 * HotBeverage Emoji class.
 *
 * @version v13.1
 *
 **/
class HotBeverage
{
    public const SYMBOL = "☕";

    public const HEX = "2615";

    public const CODE = "\u{2615}";

    public const NAME = 'hot beverage';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'drink';

    public const NAME_WITH_UNDERSCORES = 'hot_beverage';

    public const TAGS = 'cafe espresso';

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
