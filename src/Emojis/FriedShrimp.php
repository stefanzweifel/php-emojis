<?php

namespace Wnx\Emojis\Emojis;

/**
 * FriedShrimp Emoji class.
 *
 * @version v14.0
 *
 **/
class FriedShrimp
{

    public const SYMBOL = "🍤";

    public const HEX = "1F364";

    public const CODE = "\u{1F364}";

    public const NAME = 'fried shrimp';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'food-asian';

    public const NAME_WITH_UNDERSCORES = 'fried_shrimp';

    public const TAGS = 'tempura';

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
