<?php

namespace Wnx\Emojis\Emojis;

/**
 * BrownCircle Emoji class.
 *
 * @version v13.1
 *
 **/
class BrownCircle {

    public const SYMBOL = "🟤";

    public const HEX = "1F7E4";

    public const CODE = "\u{1F7E4}";

    public const NAME = 'brown circle';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'geometric';

    public const NAME_WITH_UNDERSCORES = 'brown_circle';

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
