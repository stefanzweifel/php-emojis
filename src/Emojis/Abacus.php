<?php

namespace Wnx\Emojis\Emojis;

/**
 * Abacus Emoji class.
 *
 * @version v13.1
 *
 **/
class Abacus {

    public const SYMBOL = "🧮";

    public const HEX = "1F9EE";

    public const CODE = "\u{1F9EE}";

    public const NAME = 'abacus';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'computer';

    public const NAME_WITH_UNDERSCORES = 'abacus';

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
