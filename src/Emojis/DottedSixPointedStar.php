<?php

namespace Wnx\Emojis\Emojis;

/**
 * DottedSixPointedStar Emoji class.
 *
 * @version v14.0
 *
 **/
class DottedSixPointedStar
{

    public const SYMBOL = "🔯";

    public const HEX = "1F52F";

    public const CODE = "\u{1F52F}";

    public const NAME = 'dotted six-pointed star';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'religion';

    public const NAME_WITH_UNDERSCORES = 'dotted_six-pointed_star';

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
