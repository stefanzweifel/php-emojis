<?php

namespace Wnx\Emojis\Emojis;

/**
 * HollowRedCircle Emoji class.
 *
 * @version v13.1
 *
 **/
class HollowRedCircle {

    public const SYMBOL = "⭕";

    public const HEX = "2B55";

    public const CODE = "\u{2B55}";

    public const NAME = 'hollow red circle';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'other-symbol';

    public const NAME_WITH_UNDERSCORES = 'hollow_red_circle';

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
