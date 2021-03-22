<?php

namespace Wnx\Emojis\Emojis;

/**
 * CoupleWithHeartWomanWoman Emoji class.
 *
 * @version v13.1
 *
 **/
class CoupleWithHeartWomanWoman {

    public const SYMBOL = "👩‍❤️‍👩";

    public const HEX = "1F469 200D 2764 FE0F 200D 1F469";

    public const CODE = "\u{1F469}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}";

    public const NAME = 'couple with heart woman woman';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'family';

    public const NAME_WITH_UNDERSCORES = 'couple_with_heart_woman_woman';

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
