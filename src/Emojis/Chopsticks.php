<?php

namespace Wnx\Emojis\Emojis;

/**
 * Chopsticks Emoji class.
 *
 * @version v13.1
 *
 **/
class Chopsticks {

    public const SYMBOL = "🥢";

    public const HEX = "1F962";

    public const CODE = "\u{1F962}";

    public const NAME = 'chopsticks';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'dishware';

    public const NAME_WITH_UNDERSCORES = 'chopsticks';

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
