<?php

namespace Wnx\Emojis\Emojis;

/**
 * Trophy Emoji class.
 *
 * @version v14.0
 *
 **/
class Trophy
{

    public const SYMBOL = "🏆";

    public const HEX = "1F3C6";

    public const CODE = "\u{1F3C6}";

    public const NAME = 'trophy';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'award-medal';

    public const NAME_WITH_UNDERSCORES = 'trophy';

    public const TAGS = 'award contest winner';

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
