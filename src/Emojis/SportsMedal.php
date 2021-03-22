<?php

namespace Wnx\Emojis\Emojis;

/**
 * SportsMedal Emoji class.
 *
 * @version v13.1
 *
 **/
class SportsMedal
{
    public const SYMBOL = "🏅";

    public const HEX = "1F3C5";

    public const CODE = "\u{1F3C5}";

    public const NAME = 'sports medal';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'award-medal';

    public const NAME_WITH_UNDERSCORES = 'sports_medal';

    public const TAGS = 'gold winner';

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
