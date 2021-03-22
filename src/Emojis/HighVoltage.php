<?php

namespace Wnx\Emojis\Emojis;

/**
 * HighVoltage Emoji class.
 *
 * @version v13.1
 *
 **/
class HighVoltage
{
    public const SYMBOL = "⚡";

    public const HEX = "26A1";

    public const CODE = "\u{26A1}";

    public const NAME = 'high voltage';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'sky & weather';

    public const NAME_WITH_UNDERSCORES = 'high_voltage';

    public const TAGS = 'lightning thunder';

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
