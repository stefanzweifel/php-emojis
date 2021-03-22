<?php

namespace Wnx\Emojis\Emojis;

/**
 * Strawberry Emoji class.
 *
 * @version v13.1
 *
 **/
class Strawberry {

    public const SYMBOL = "🍓";

    public const HEX = "1F353";

    public const CODE = "\u{1F353}";

    public const NAME = 'strawberry';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'food-fruit';

    public const NAME_WITH_UNDERSCORES = 'strawberry';

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
