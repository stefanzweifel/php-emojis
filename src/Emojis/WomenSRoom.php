<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomenSRoom Emoji class.
 *
 * @version v14.0
 *
 **/
class WomenSRoom
{

    public const SYMBOL = "🚺";

    public const HEX = "1F6BA";

    public const CODE = "\u{1F6BA}";

    public const NAME = 'women’s room';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'transport-sign';

    public const NAME_WITH_UNDERSCORES = 'women’s_room';

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
