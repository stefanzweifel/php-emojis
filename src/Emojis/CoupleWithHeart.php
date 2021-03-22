<?php

namespace Wnx\Emojis\Emojis;

/**
 * CoupleWithHeart Emoji class.
 *
 * @version v13.1
 *
 **/
class CoupleWithHeart {

    public const SYMBOL = "💑";

    public const HEX = "1F491";

    public const CODE = "\u{1F491}";

    public const NAME = 'couple with heart';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'family';

    public const NAME_WITH_UNDERSCORES = 'couple_with_heart';

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
