<?php

namespace Wnx\Emojis\Emojis;

/**
 * BottleWithPoppingCork Emoji class.
 *
 * @version v13.1
 *
 **/
class BottleWithPoppingCork {

    public const SYMBOL = "🍾";

    public const HEX = "1F37E";

    public const CODE = "\u{1F37E}";

    public const NAME = 'bottle with popping cork';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'drink';

    public const NAME_WITH_UNDERSCORES = 'bottle_with_popping_cork';

    public const TAGS = 'bottle bubbly celebration';

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
