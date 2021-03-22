<?php

namespace Wnx\Emojis\Emojis;

/**
 * Sparkle Emoji class.
 *
 * @version v13.1
 *
 **/
class Sparkle {

    public const SYMBOL = "❇️";

    public const HEX = "2747 FE0F";

    public const CODE = "\u{2747}\u{FE0F}";

    public const NAME = 'sparkle';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'other-symbol';

    public const NAME_WITH_UNDERSCORES = 'sparkle';

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
