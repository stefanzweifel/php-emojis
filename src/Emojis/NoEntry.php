<?php

namespace Wnx\Emojis\Emojis;

/**
 * NoEntry Emoji class.
 *
 * @version v13.1
 *
 **/
class NoEntry {

    public const SYMBOL = "⛔";

    public const HEX = "26D4";

    public const CODE = "\u{26D4}";

    public const NAME = 'no entry';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'warning';

    public const NAME_WITH_UNDERSCORES = 'no_entry';

    public const TAGS = 'limit';

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
