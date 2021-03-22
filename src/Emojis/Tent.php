<?php

namespace Wnx\Emojis\Emojis;

/**
 * Tent Emoji class.
 *
 * @version v13.1
 *
 **/
class Tent
{
    public const SYMBOL = "⛺";

    public const HEX = "26FA";

    public const CODE = "\u{26FA}";

    public const NAME = 'tent';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'place-other';

    public const NAME_WITH_UNDERSCORES = 'tent';

    public const TAGS = 'camping';

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
