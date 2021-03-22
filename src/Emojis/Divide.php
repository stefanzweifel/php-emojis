<?php

namespace Wnx\Emojis\Emojis;

/**
 * Divide Emoji class.
 *
 * @version v13.1
 *
 **/
class Divide {

    public const SYMBOL = "➗";

    public const HEX = "2797";

    public const CODE = "\u{2797}";

    public const NAME = 'divide';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'math';

    public const NAME_WITH_UNDERSCORES = 'divide';

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
