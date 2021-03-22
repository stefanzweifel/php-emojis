<?php

namespace Wnx\Emojis\Emojis;

/**
 * HeavyDollarSign Emoji class.
 *
 * @version v13.1
 *
 **/
class HeavyDollarSign
{
    public const SYMBOL = "💲";

    public const HEX = "1F4B2";

    public const CODE = "\u{1F4B2}";

    public const NAME = 'heavy dollar sign';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'currency';

    public const NAME_WITH_UNDERSCORES = 'heavy_dollar_sign';

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
