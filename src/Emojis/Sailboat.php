<?php

namespace Wnx\Emojis\Emojis;

/**
 * Sailboat Emoji class.
 *
 * @version v13.1
 *
 **/
class Sailboat {

    public const SYMBOL = "⛵";

    public const HEX = "26F5";

    public const CODE = "\u{26F5}";

    public const NAME = 'sailboat';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'transport-water';

    public const NAME_WITH_UNDERSCORES = 'sailboat';

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
