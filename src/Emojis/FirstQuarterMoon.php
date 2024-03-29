<?php

namespace Wnx\Emojis\Emojis;

/**
 * FirstQuarterMoon Emoji class.
 *
 * @version v14.0
 *
 **/
class FirstQuarterMoon
{

    public const SYMBOL = "🌓";

    public const HEX = "1F313";

    public const CODE = "\u{1F313}";

    public const NAME = 'first quarter moon';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'sky & weather';

    public const NAME_WITH_UNDERSCORES = 'first_quarter_moon';

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
