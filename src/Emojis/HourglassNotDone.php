<?php

namespace Wnx\Emojis\Emojis;

/**
 * HourglassNotDone Emoji class.
 *
 * @version v13.1
 *
 **/
class HourglassNotDone {

    public const SYMBOL = "⏳";

    public const HEX = "23F3";

    public const CODE = "\u{23F3}";

    public const NAME = 'hourglass not done';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'time';

    public const NAME_WITH_UNDERSCORES = 'hourglass_not_done';

    public const TAGS = 'time';

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
