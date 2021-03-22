<?php

namespace Wnx\Emojis\Emojis;

/**
 * FirstPlaceMedal Emoji class.
 *
 * @version v13.1
 *
 **/
class FirstPlaceMedal
{
    public const SYMBOL = "🥇";

    public const HEX = "1F947";

    public const CODE = "\u{1F947}";

    public const NAME = 'first place medal';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'award-medal';

    public const NAME_WITH_UNDERSCORES = 'first_place_medal';

    public const TAGS = 'gold';

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
