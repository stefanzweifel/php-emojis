<?php

namespace Wnx\Emojis\Emojis;

/**
 * CutOfMeat Emoji class.
 *
 * @version v14.0
 *
 **/
class CutOfMeat
{

    public const SYMBOL = "🥩";

    public const HEX = "1F969";

    public const CODE = "\u{1F969}";

    public const NAME = 'cut of meat';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'food-prepared';

    public const NAME_WITH_UNDERSCORES = 'cut_of_meat';

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
