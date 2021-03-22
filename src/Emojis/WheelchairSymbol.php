<?php

namespace Wnx\Emojis\Emojis;

/**
 * WheelchairSymbol Emoji class.
 *
 * @version v13.1
 *
 **/
class WheelchairSymbol
{
    public const SYMBOL = "♿";

    public const HEX = "267F";

    public const CODE = "\u{267F}";

    public const NAME = 'wheelchair symbol';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'transport-sign';

    public const NAME_WITH_UNDERSCORES = 'wheelchair_symbol';

    public const TAGS = 'accessibility';

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
