<?php

namespace Wnx\Emojis\Emojis;

/**
 * Umbrella Emoji class.
 *
 * @version v14.0
 *
 **/
class Umbrella
{

    public const SYMBOL = "☂️";

    public const HEX = "2602 FE0F";

    public const CODE = "\u{2602}\u{FE0F}";

    public const NAME = 'umbrella';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'sky & weather';

    public const NAME_WITH_UNDERSCORES = 'umbrella';

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
