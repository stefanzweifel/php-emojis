<?php

namespace Wnx\Emojis\Emojis;

/**
 * Clamp Emoji class.
 *
 * @version v13.1
 *
 **/
class Clamp {

    public const SYMBOL = "🗜️";

    public const HEX = "1F5DC FE0F";

    public const CODE = "\u{1F5DC}\u{FE0F}";

    public const NAME = 'clamp';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'tool';

    public const NAME_WITH_UNDERSCORES = 'clamp';

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
