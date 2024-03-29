<?php

namespace Wnx\Emojis\Emojis;

/**
 * TimerClock Emoji class.
 *
 * @version v14.0
 *
 **/
class TimerClock
{

    public const SYMBOL = "⏲️";

    public const HEX = "23F2 FE0F";

    public const CODE = "\u{23F2}\u{FE0F}";

    public const NAME = 'timer clock';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'time';

    public const NAME_WITH_UNDERSCORES = 'timer_clock';

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
