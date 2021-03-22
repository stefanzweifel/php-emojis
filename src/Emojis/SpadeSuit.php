<?php

namespace Wnx\Emojis\Emojis;

/**
 * SpadeSuit Emoji class.
 *
 * @version v13.1
 *
 **/
class SpadeSuit {

    public const SYMBOL = "♠️";

    public const HEX = "2660 FE0F";

    public const CODE = "\u{2660}\u{FE0F}";

    public const NAME = 'spade suit';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'game';

    public const NAME_WITH_UNDERSCORES = 'spade_suit';

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
