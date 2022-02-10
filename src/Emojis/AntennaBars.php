<?php

namespace Wnx\Emojis\Emojis;

/**
 * AntennaBars Emoji class.
 *
 * @version v14.0
 *
 **/
class AntennaBars
{

    public const SYMBOL = "📶";

    public const HEX = "1F4F6";

    public const CODE = "\u{1F4F6}";

    public const NAME = 'antenna bars';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'av-symbol';

    public const NAME_WITH_UNDERSCORES = 'antenna_bars';

    public const TAGS = 'wifi';

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
