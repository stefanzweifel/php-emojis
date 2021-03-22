<?php

namespace Wnx\Emojis\Emojis;

/**
 * CrossMark Emoji class.
 *
 * @version v13.1
 *
 **/
class CrossMark
{
    public const SYMBOL = "❌";

    public const HEX = "274C";

    public const CODE = "\u{274C}";

    public const NAME = 'cross mark';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'other-symbol';

    public const NAME_WITH_UNDERSCORES = 'cross_mark';

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
