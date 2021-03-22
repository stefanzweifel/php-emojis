<?php

namespace Wnx\Emojis\Emojis;

/**
 * HeartSuit Emoji class.
 *
 * @version v13.1
 *
 **/
class HeartSuit {

    public const SYMBOL = "♥️";

    public const HEX = "2665 FE0F";

    public const CODE = "\u{2665}\u{FE0F}";

    public const NAME = 'heart suit';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'game';

    public const NAME_WITH_UNDERSCORES = 'heart_suit';

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
