<?php

namespace Wnx\Emojis\Emojis;

/**
 * TumblerGlass Emoji class.
 *
 * @version v13.1
 *
 **/
class TumblerGlass {

    public const SYMBOL = "🥃";

    public const HEX = "1F943";

    public const CODE = "\u{1F943}";

    public const NAME = 'tumbler glass';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'drink';

    public const NAME_WITH_UNDERSCORES = 'tumbler_glass';

    public const TAGS = 'whisky';

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
