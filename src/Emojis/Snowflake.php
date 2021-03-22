<?php

namespace Wnx\Emojis\Emojis;

/**
 * Snowflake Emoji class.
 *
 * @version v13.1
 *
 **/
class Snowflake
{
    public const SYMBOL = "❄️";

    public const HEX = "2744 FE0F";

    public const CODE = "\u{2744}\u{FE0F}";

    public const NAME = 'snowflake';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'sky & weather';

    public const NAME_WITH_UNDERSCORES = 'snowflake';

    public const TAGS = 'winter cold weather';

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
