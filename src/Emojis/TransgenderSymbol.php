<?php

namespace Wnx\Emojis\Emojis;

/**
 * TransgenderSymbol Emoji class.
 *
 * @version v13.1
 *
 **/
class TransgenderSymbol {

    public const SYMBOL = "⚧️";

    public const HEX = "26A7 FE0F";

    public const CODE = "\u{26A7}\u{FE0F}";

    public const NAME = 'transgender symbol';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'gender';

    public const NAME_WITH_UNDERSCORES = 'transgender_symbol';

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
