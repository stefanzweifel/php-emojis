<?php

namespace Wnx\Emojis\Emojis;

/**
 * TropicalDrink Emoji class.
 *
 * @version v13.1
 *
 **/
class TropicalDrink
{
    public const SYMBOL = "🍹";

    public const HEX = "1F379";

    public const CODE = "\u{1F379}";

    public const NAME = 'tropical drink';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'drink';

    public const NAME_WITH_UNDERSCORES = 'tropical_drink';

    public const TAGS = 'summer vacation';

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
