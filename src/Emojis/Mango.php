<?php

namespace Wnx\Emojis\Emojis;

/**
 * Mango Emoji class.
 *
 * @version v13.1
 *
 **/
class Mango
{
    public const SYMBOL = "🥭";

    public const HEX = "1F96D";

    public const CODE = "\u{1F96D}";

    public const NAME = 'mango';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'food-fruit';

    public const NAME_WITH_UNDERSCORES = 'mango';

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
