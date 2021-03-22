<?php

namespace Wnx\Emojis\Emojis;

/**
 * OrangeCircle Emoji class.
 *
 * @version v13.1
 *
 **/
class OrangeCircle {

    public const SYMBOL = "🟠";

    public const HEX = "1F7E0";

    public const CODE = "\u{1F7E0}";

    public const NAME = 'orange circle';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'geometric';

    public const NAME_WITH_UNDERSCORES = 'orange_circle';

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
