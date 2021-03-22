<?php

namespace Wnx\Emojis\Emojis;

/**
 * ClockwiseVerticalArrows Emoji class.
 *
 * @version v13.1
 *
 **/
class ClockwiseVerticalArrows {

    public const SYMBOL = "🔃";

    public const HEX = "1F503";

    public const CODE = "\u{1F503}";

    public const NAME = 'clockwise vertical arrows';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'arrow';

    public const NAME_WITH_UNDERSCORES = 'clockwise_vertical_arrows';

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
