<?php

namespace Wnx\Emojis\Emojis;

/**
 * CocktailGlass Emoji class.
 *
 * @version v13.1
 *
 **/
class CocktailGlass {

    public const SYMBOL = "🍸";

    public const HEX = "1F378";

    public const CODE = "\u{1F378}";

    public const NAME = 'cocktail glass';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'drink';

    public const NAME_WITH_UNDERSCORES = 'cocktail_glass';

    public const TAGS = 'drink';

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
