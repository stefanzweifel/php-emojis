<?php

namespace Wnx\Emojis\Emojis;

/**
 * Bed Emoji class.
 *
 * @version v14.0
 *
 **/
class Bed
{

    public const SYMBOL = "🛏️";

    public const HEX = "1F6CF FE0F";

    public const CODE = "\u{1F6CF}\u{FE0F}";

    public const NAME = 'bed';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'household';

    public const NAME_WITH_UNDERSCORES = 'bed';

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
