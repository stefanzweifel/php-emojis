<?php

namespace Wnx\Emojis\Emojis;

/**
 * Cancer Emoji class.
 *
 * @version v14.0
 *
 **/
class Cancer
{

    public const SYMBOL = "♋";

    public const HEX = "264B";

    public const CODE = "\u{264B}";

    public const NAME = 'Cancer';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'zodiac';

    public const NAME_WITH_UNDERSCORES = 'Cancer';

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
