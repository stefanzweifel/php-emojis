<?php

namespace Wnx\Emojis\Emojis;

/**
 * TriangularFlag Emoji class.
 *
 * @version v14.0
 *
 **/
class TriangularFlag
{

    public const SYMBOL = "🚩";

    public const HEX = "1F6A9";

    public const CODE = "\u{1F6A9}";

    public const NAME = 'triangular flag';

    public const GROUP = 'Flags';

    public const SUBGROUP = 'flag';

    public const NAME_WITH_UNDERSCORES = 'triangular_flag';

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
