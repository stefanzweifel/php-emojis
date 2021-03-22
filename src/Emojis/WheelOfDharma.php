<?php

namespace Wnx\Emojis\Emojis;

/**
 * WheelOfDharma Emoji class.
 *
 * @version v13.1
 *
 **/
class WheelOfDharma {

    public const SYMBOL = "☸️";

    public const HEX = "2638 FE0F";

    public const CODE = "\u{2638}\u{FE0F}";

    public const NAME = 'wheel of dharma';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'religion';

    public const NAME_WITH_UNDERSCORES = 'wheel_of_dharma';

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
