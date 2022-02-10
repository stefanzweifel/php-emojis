<?php

namespace Wnx\Emojis\Emojis;

/**
 * Doughnut Emoji class.
 *
 * @version v14.0
 *
 **/
class Doughnut
{

    public const SYMBOL = "🍩";

    public const HEX = "1F369";

    public const CODE = "\u{1F369}";

    public const NAME = 'doughnut';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'food-sweet';

    public const NAME_WITH_UNDERSCORES = 'doughnut';

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
