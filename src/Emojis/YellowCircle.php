<?php

namespace Wnx\Emojis\Emojis;

/**
 * YellowCircle Emoji class.
 *
 * @version v13.1
 *
 **/
class YellowCircle
{
    public const SYMBOL = "🟡";

    public const HEX = "1F7E1";

    public const CODE = "\u{1F7E1}";

    public const NAME = 'yellow circle';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'geometric';

    public const NAME_WITH_UNDERSCORES = 'yellow_circle';

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
