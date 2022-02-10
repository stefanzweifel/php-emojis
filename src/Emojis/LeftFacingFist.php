<?php

namespace Wnx\Emojis\Emojis;

/**
 * LeftFacingFist Emoji class.
 *
 * @version v14.0
 *
 **/
class LeftFacingFist
{

    public const SYMBOL = "🤛";

    public const HEX = "1F91B";

    public const CODE = "\u{1F91B}";

    public const NAME = 'left-facing fist';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-closed';

    public const NAME_WITH_UNDERSCORES = 'left-facing_fist';

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
