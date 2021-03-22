<?php

namespace Wnx\Emojis\Emojis;

/**
 * Tulip Emoji class.
 *
 * @version v13.1
 *
 **/
class Tulip {

    public const SYMBOL = "🌷";

    public const HEX = "1F337";

    public const CODE = "\u{1F337}";

    public const NAME = 'tulip';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'plant-flower';

    public const NAME_WITH_UNDERSCORES = 'tulip';

    public const TAGS = 'flower';

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
