<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomenHoldingHands Emoji class.
 *
 * @version v14.0
 *
 **/
class WomenHoldingHands
{

    public const SYMBOL = "👭";

    public const HEX = "1F46D";

    public const CODE = "\u{1F46D}";

    public const NAME = 'women holding hands';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'family';

    public const NAME_WITH_UNDERSCORES = 'women_holding_hands';

    public const TAGS = 'couple date';

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
