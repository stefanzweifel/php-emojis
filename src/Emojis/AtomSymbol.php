<?php

namespace Wnx\Emojis\Emojis;

/**
 * AtomSymbol Emoji class.
 *
 * @version v13.1
 *
 **/
class AtomSymbol
{
    public const SYMBOL = "⚛️";

    public const HEX = "269B FE0F";

    public const CODE = "\u{269B}\u{FE0F}";

    public const NAME = 'atom symbol';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'religion';

    public const NAME_WITH_UNDERSCORES = 'atom_symbol';

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
