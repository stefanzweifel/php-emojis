<?php

namespace Wnx\Emojis\Emojis;

/**
 * FastForwardButton Emoji class.
 *
 * @version v13.1
 *
 **/
class FastForwardButton {

    public const SYMBOL = "⏩";

    public const HEX = "23E9";

    public const CODE = "\u{23E9}";

    public const NAME = 'fast-forward button';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'av-symbol';

    public const NAME_WITH_UNDERSCORES = 'fast-forward_button';

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