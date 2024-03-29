<?php

namespace Wnx\Emojis\Emojis;

/**
 * CircledM Emoji class.
 *
 * @version v14.0
 *
 **/
class CircledM
{

    public const SYMBOL = "Ⓜ️";

    public const HEX = "24C2 FE0F";

    public const CODE = "\u{24C2}\u{FE0F}";

    public const NAME = 'circled M';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'alphanum';

    public const NAME_WITH_UNDERSCORES = 'circled_M';

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
