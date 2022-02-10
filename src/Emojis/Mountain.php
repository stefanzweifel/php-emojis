<?php

namespace Wnx\Emojis\Emojis;

/**
 * Mountain Emoji class.
 *
 * @version v14.0
 *
 **/
class Mountain
{

    public const SYMBOL = "⛰️";

    public const HEX = "26F0 FE0F";

    public const CODE = "\u{26F0}\u{FE0F}";

    public const NAME = 'mountain';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'place-geographic';

    public const NAME_WITH_UNDERSCORES = 'mountain';

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
