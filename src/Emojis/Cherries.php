<?php

namespace Wnx\Emojis\Emojis;

/**
 * Cherries Emoji class.
 *
 * @version v14.0
 *
 **/
class Cherries
{

    public const SYMBOL = "🍒";

    public const HEX = "1F352";

    public const CODE = "\u{1F352}";

    public const NAME = 'cherries';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'food-fruit';

    public const NAME_WITH_UNDERSCORES = 'cherries';

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
