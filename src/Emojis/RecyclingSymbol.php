<?php

namespace Wnx\Emojis\Emojis;

/**
 * RecyclingSymbol Emoji class.
 *
 * @version v13.1
 *
 **/
class RecyclingSymbol {

    public const SYMBOL = "♻️";

    public const HEX = "267B FE0F";

    public const CODE = "\u{267B}\u{FE0F}";

    public const NAME = 'recycling symbol';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'other-symbol';

    public const NAME_WITH_UNDERSCORES = 'recycling_symbol';

    public const TAGS = 'environment green';

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
