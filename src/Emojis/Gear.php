<?php

namespace Wnx\Emojis\Emojis;

/**
 * Gear Emoji class.
 *
 * @version v13.1
 *
 **/
class Gear {

    public const SYMBOL = "⚙️";

    public const HEX = "2699 FE0F";

    public const CODE = "\u{2699}\u{FE0F}";

    public const NAME = 'gear';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'tool';

    public const NAME_WITH_UNDERSCORES = 'gear';

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
