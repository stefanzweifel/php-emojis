<?php

namespace Wnx\Emojis\Emojis;

/**
 * ChartIncreasingWithYen Emoji class.
 *
 * @version v14.0
 *
 **/
class ChartIncreasingWithYen
{

    public const SYMBOL = "💹";

    public const HEX = "1F4B9";

    public const CODE = "\u{1F4B9}";

    public const NAME = 'chart increasing with yen';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'money';

    public const NAME_WITH_UNDERSCORES = 'chart_increasing_with_yen';

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
