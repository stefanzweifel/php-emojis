<?php

namespace Wnx\Emojis\Emojis;

/**
 * Crab Emoji class.
 *
 * @version v14.0
 *
 **/
class Crab
{

    public const SYMBOL = "🦀";

    public const HEX = "1F980";

    public const CODE = "\u{1F980}";

    public const NAME = 'crab';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'food-marine';

    public const NAME_WITH_UNDERSCORES = 'crab';

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
