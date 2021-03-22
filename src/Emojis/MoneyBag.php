<?php

namespace Wnx\Emojis\Emojis;

/**
 * MoneyBag Emoji class.
 *
 * @version v13.1
 *
 **/
class MoneyBag {

    public const SYMBOL = "💰";

    public const HEX = "1F4B0";

    public const CODE = "\u{1F4B0}";

    public const NAME = 'money bag';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'money';

    public const NAME_WITH_UNDERSCORES = 'money_bag';

    public const TAGS = 'dollar cream';

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
