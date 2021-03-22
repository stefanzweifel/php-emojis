<?php

namespace Wnx\Emojis\Emojis;

/**
 * HotPepper Emoji class.
 *
 * @version v13.1
 *
 **/
class HotPepper {

    public const SYMBOL = "🌶️";

    public const HEX = "1F336 FE0F";

    public const CODE = "\u{1F336}\u{FE0F}";

    public const NAME = 'hot pepper';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'food-vegetable';

    public const NAME_WITH_UNDERSCORES = 'hot_pepper';

    public const TAGS = 'spicy';

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
