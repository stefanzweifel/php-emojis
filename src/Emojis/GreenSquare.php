<?php

namespace Wnx\Emojis\Emojis;

/**
 * GreenSquare Emoji class.
 *
 * @version v13.1
 *
 **/
class GreenSquare
{
    public const SYMBOL = "🟩";

    public const HEX = "1F7E9";

    public const CODE = "\u{1F7E9}";

    public const NAME = 'green square';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'geometric';

    public const NAME_WITH_UNDERSCORES = 'green_square';

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
