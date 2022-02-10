<?php

namespace Wnx\Emojis\Emojis;

/**
 * SteamingBowl Emoji class.
 *
 * @version v14.0
 *
 **/
class SteamingBowl
{

    public const SYMBOL = "🍜";

    public const HEX = "1F35C";

    public const CODE = "\u{1F35C}";

    public const NAME = 'steaming bowl';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'food-asian';

    public const NAME_WITH_UNDERSCORES = 'steaming_bowl';

    public const TAGS = 'noodle';

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
