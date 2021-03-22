<?php

namespace Wnx\Emojis\Emojis;

/**
 * BellhopBell Emoji class.
 *
 * @version v13.1
 *
 **/
class BellhopBell
{
    public const SYMBOL = "🛎️";

    public const HEX = "1F6CE FE0F";

    public const CODE = "\u{1F6CE}\u{FE0F}";

    public const NAME = 'bellhop bell';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'hotel';

    public const NAME_WITH_UNDERSCORES = 'bellhop_bell';

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
