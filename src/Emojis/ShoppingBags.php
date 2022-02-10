<?php

namespace Wnx\Emojis\Emojis;

/**
 * ShoppingBags Emoji class.
 *
 * @version v14.0
 *
 **/
class ShoppingBags
{

    public const SYMBOL = "🛍️";

    public const HEX = "1F6CD FE0F";

    public const CODE = "\u{1F6CD}\u{FE0F}";

    public const NAME = 'shopping bags';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'clothing';

    public const NAME_WITH_UNDERSCORES = 'shopping_bags';

    public const TAGS = 'bags';

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
