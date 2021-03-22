<?php

namespace Wnx\Emojis\Emojis;

/**
 * GreenApple Emoji class.
 *
 * @version v13.1
 *
 **/
class GreenApple {

    public const SYMBOL = "🍏";

    public const HEX = "1F34F";

    public const CODE = "\u{1F34F}";

    public const NAME = 'green apple';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'food-fruit';

    public const NAME_WITH_UNDERSCORES = 'green_apple';

    public const TAGS = 'fruit';

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