<?php

namespace Wnx\Emojis\Emojis;

/**
 * PurpleSquare Emoji class.
 *
 * @version v13.1
 *
 **/
class PurpleSquare {

    public const SYMBOL = "🟪";

    public const HEX = "1F7EA";

    public const CODE = "\u{1F7EA}";

    public const NAME = 'purple square';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'geometric';

    public const NAME_WITH_UNDERSCORES = 'purple_square';

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