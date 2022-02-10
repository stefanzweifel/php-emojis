<?php

namespace Wnx\Emojis\Emojis;

/**
 * SnowmanWithoutSnow Emoji class.
 *
 * @version v14.0
 *
 **/
class SnowmanWithoutSnow
{

    public const SYMBOL = "⛄";

    public const HEX = "26C4";

    public const CODE = "\u{26C4}";

    public const NAME = 'snowman without snow';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'sky & weather';

    public const NAME_WITH_UNDERSCORES = 'snowman_without_snow';

    public const TAGS = 'winter';

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
