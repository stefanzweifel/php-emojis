<?php

namespace Wnx\Emojis\Emojis;

/**
 * Sandwich Emoji class.
 *
 * @version v14.0
 *
 **/
class Sandwich
{

    public const SYMBOL = "🥪";

    public const HEX = "1F96A";

    public const CODE = "\u{1F96A}";

    public const NAME = 'sandwich';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'food-prepared';

    public const NAME_WITH_UNDERSCORES = 'sandwich';

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
