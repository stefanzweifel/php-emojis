<?php

namespace Wnx\Emojis\Emojis;

/**
 * ClubSuit Emoji class.
 *
 * @version v14.0
 *
 **/
class ClubSuit
{

    public const SYMBOL = "♣️";

    public const HEX = "2663 FE0F";

    public const CODE = "\u{2663}\u{FE0F}";

    public const NAME = 'club suit';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'game';

    public const NAME_WITH_UNDERSCORES = 'club_suit';

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
