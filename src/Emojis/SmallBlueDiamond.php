<?php

namespace Wnx\Emojis\Emojis;

/**
 * SmallBlueDiamond Emoji class.
 *
 * @version v13.1
 *
 **/
class SmallBlueDiamond
{
    public const SYMBOL = "🔹";

    public const HEX = "1F539";

    public const CODE = "\u{1F539}";

    public const NAME = 'small blue diamond';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'geometric';

    public const NAME_WITH_UNDERSCORES = 'small_blue_diamond';

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
