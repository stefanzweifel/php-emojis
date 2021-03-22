<?php

namespace Wnx\Emojis\Emojis;

/**
 * Spaghetti Emoji class.
 *
 * @version v13.1
 *
 **/
class Spaghetti {

    public const SYMBOL = "🍝";

    public const HEX = "1F35D";

    public const CODE = "\u{1F35D}";

    public const NAME = 'spaghetti';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'food-asian';

    public const NAME_WITH_UNDERSCORES = 'spaghetti';

    public const TAGS = 'pasta';

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
