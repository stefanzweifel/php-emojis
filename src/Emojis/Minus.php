<?php

namespace Wnx\Emojis\Emojis;

/**
 * Minus Emoji class.
 *
 * @version v13.1
 *
 **/
class Minus
{
    public const SYMBOL = "➖";

    public const HEX = "2796";

    public const CODE = "\u{2796}";

    public const NAME = 'minus';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'math';

    public const NAME_WITH_UNDERSCORES = 'minus';

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
