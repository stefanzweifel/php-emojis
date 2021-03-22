<?php

namespace Wnx\Emojis\Emojis;

/**
 * ChartIncreasing Emoji class.
 *
 * @version v13.1
 *
 **/
class ChartIncreasing
{
    public const SYMBOL = "📈";

    public const HEX = "1F4C8";

    public const CODE = "\u{1F4C8}";

    public const NAME = 'chart increasing';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'office';

    public const NAME_WITH_UNDERSCORES = 'chart_increasing';

    public const TAGS = 'graph metrics';

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
