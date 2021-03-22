<?php

namespace Wnx\Emojis\Emojis;

/**
 * Razor Emoji class.
 *
 * @version v13.1
 *
 **/
class Razor {

    public const SYMBOL = "🪒";

    public const HEX = "1FA92";

    public const CODE = "\u{1FA92}";

    public const NAME = 'razor';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'household';

    public const NAME_WITH_UNDERSCORES = 'razor';

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
