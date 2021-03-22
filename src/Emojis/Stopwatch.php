<?php

namespace Wnx\Emojis\Emojis;

/**
 * Stopwatch Emoji class.
 *
 * @version v13.1
 *
 **/
class Stopwatch
{
    public const SYMBOL = "⏱️";

    public const HEX = "23F1 FE0F";

    public const CODE = "\u{23F1}\u{FE0F}";

    public const NAME = 'stopwatch';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'time';

    public const NAME_WITH_UNDERSCORES = 'stopwatch';

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
