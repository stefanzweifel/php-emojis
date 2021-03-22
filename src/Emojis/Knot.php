<?php

namespace Wnx\Emojis\Emojis;

/**
 * Knot Emoji class.
 *
 * @version v13.1
 *
 **/
class Knot {

    public const SYMBOL = "🪢";

    public const HEX = "1FAA2";

    public const CODE = "\u{1FAA2}";

    public const NAME = 'knot';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'arts & crafts';

    public const NAME_WITH_UNDERSCORES = 'knot';

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
