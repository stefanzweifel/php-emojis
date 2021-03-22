<?php

namespace Wnx\Emojis\Emojis;

/**
 * AlarmClock Emoji class.
 *
 * @version v13.1
 *
 **/
class AlarmClock
{
    public const SYMBOL = "⏰";

    public const HEX = "23F0";

    public const CODE = "\u{23F0}";

    public const NAME = 'alarm clock';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'time';

    public const NAME_WITH_UNDERSCORES = 'alarm_clock';

    public const TAGS = 'morning';

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
