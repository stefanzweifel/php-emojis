<?php

namespace Wnx\Emojis\Emojis;

/**
 * BlackCircle Emoji class.
 *
 * @version v14.0
 *
 **/
class BlackCircle
{

    public const SYMBOL = "⚫";

    public const HEX = "26AB";

    public const CODE = "\u{26AB}";

    public const NAME = 'black circle';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'geometric';

    public const NAME_WITH_UNDERSCORES = 'black_circle';

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
