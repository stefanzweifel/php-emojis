<?php

namespace Wnx\Emojis\Emojis;

/**
 * MilkyWay Emoji class.
 *
 * @version v14.0
 *
 **/
class MilkyWay
{

    public const SYMBOL = "🌌";

    public const HEX = "1F30C";

    public const CODE = "\u{1F30C}";

    public const NAME = 'milky way';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'sky & weather';

    public const NAME_WITH_UNDERSCORES = 'milky_way';

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
