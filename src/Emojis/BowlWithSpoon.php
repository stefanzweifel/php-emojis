<?php

namespace Wnx\Emojis\Emojis;

/**
 * BowlWithSpoon Emoji class.
 *
 * @version v13.1
 *
 **/
class BowlWithSpoon
{
    public const SYMBOL = "🥣";

    public const HEX = "1F963";

    public const CODE = "\u{1F963}";

    public const NAME = 'bowl with spoon';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'food-prepared';

    public const NAME_WITH_UNDERSCORES = 'bowl_with_spoon';

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
