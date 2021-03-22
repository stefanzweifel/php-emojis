<?php

namespace Wnx\Emojis\Emojis;

/**
 * FourOClock Emoji class.
 *
 * @version v13.1
 *
 **/
class FourOClock {

    public const SYMBOL = "🕓";

    public const HEX = "1F553";

    public const CODE = "\u{1F553}";

    public const NAME = 'four o’clock';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'time';

    public const NAME_WITH_UNDERSCORES = 'four_o’clock';

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