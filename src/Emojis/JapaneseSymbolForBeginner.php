<?php

namespace Wnx\Emojis\Emojis;

/**
 * JapaneseSymbolForBeginner Emoji class.
 *
 * @version v13.1
 *
 **/
class JapaneseSymbolForBeginner {

    public const SYMBOL = "🔰";

    public const HEX = "1F530";

    public const CODE = "\u{1F530}";

    public const NAME = 'Japanese symbol for beginner';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'other-symbol';

    public const NAME_WITH_UNDERSCORES = 'Japanese_symbol_for_beginner';

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
