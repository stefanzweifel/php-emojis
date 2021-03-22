<?php

namespace Wnx\Emojis\Emojis;

/**
 * BellPepper Emoji class.
 *
 * @version v13.1
 *
 **/
class BellPepper {

    public const SYMBOL = "🫑";

    public const HEX = "1FAD1";

    public const CODE = "\u{1FAD1}";

    public const NAME = 'bell pepper';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'food-vegetable';

    public const NAME_WITH_UNDERSCORES = 'bell_pepper';

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