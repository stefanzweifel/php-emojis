<?php

namespace Wnx\Emojis\Emojis;

/**
 * Hibiscus Emoji class.
 *
 * @version v13.1
 *
 **/
class Hibiscus {

    public const SYMBOL = "🌺";

    public const HEX = "1F33A";

    public const CODE = "\u{1F33A}";

    public const NAME = 'hibiscus';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'plant-flower';

    public const NAME_WITH_UNDERSCORES = 'hibiscus';

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
