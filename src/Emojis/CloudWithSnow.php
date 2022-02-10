<?php

namespace Wnx\Emojis\Emojis;

/**
 * CloudWithSnow Emoji class.
 *
 * @version v14.0
 *
 **/
class CloudWithSnow
{

    public const SYMBOL = "🌨️";

    public const HEX = "1F328 FE0F";

    public const CODE = "\u{1F328}\u{FE0F}";

    public const NAME = 'cloud with snow';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'sky & weather';

    public const NAME_WITH_UNDERSCORES = 'cloud_with_snow';

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
