<?php

namespace Wnx\Emojis\Emojis;

/**
 * BabyBottle Emoji class.
 *
 * @version v13.1
 *
 **/
class BabyBottle {

    public const SYMBOL = "🍼";

    public const HEX = "1F37C";

    public const CODE = "\u{1F37C}";

    public const NAME = 'baby bottle';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'drink';

    public const NAME_WITH_UNDERSCORES = 'baby_bottle';

    public const TAGS = 'milk';

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
