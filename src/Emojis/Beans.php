<?php

namespace Wnx\Emojis\Emojis;

/**
 * Beans Emoji class.
 *
 * @version v14.0
 *
 **/
class Beans
{

    public const SYMBOL = "🫘";

    public const HEX = "1FAD8";

    public const CODE = "\u{1FAD8}";

    public const NAME = 'beans';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'food-vegetable';

    public const NAME_WITH_UNDERSCORES = 'beans';

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
