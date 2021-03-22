<?php

namespace Wnx\Emojis\Emojis;

/**
 * PeaceSymbol Emoji class.
 *
 * @version v13.1
 *
 **/
class PeaceSymbol {

    public const SYMBOL = "☮️";

    public const HEX = "262E FE0F";

    public const CODE = "\u{262E}\u{FE0F}";

    public const NAME = 'peace symbol';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'religion';

    public const NAME_WITH_UNDERSCORES = 'peace_symbol';

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
