<?php

namespace Wnx\Emojis\Emojis;

/**
 * Duck Emoji class.
 *
 * @version v13.1
 *
 **/
class Duck {

    public const SYMBOL = "🦆";

    public const HEX = "1F986";

    public const CODE = "\u{1F986}";

    public const NAME = 'duck';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'animal-bird';

    public const NAME_WITH_UNDERSCORES = 'duck';

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
