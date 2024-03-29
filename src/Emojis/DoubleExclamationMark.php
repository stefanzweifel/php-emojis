<?php

namespace Wnx\Emojis\Emojis;

/**
 * DoubleExclamationMark Emoji class.
 *
 * @version v14.0
 *
 **/
class DoubleExclamationMark
{

    public const SYMBOL = "‼️";

    public const HEX = "203C FE0F";

    public const CODE = "\u{203C}\u{FE0F}";

    public const NAME = 'double exclamation mark';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'punctuation';

    public const NAME_WITH_UNDERSCORES = 'double_exclamation_mark';

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
