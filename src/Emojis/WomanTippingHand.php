<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanTippingHand Emoji class.
 *
 * @version v14.0
 *
 **/
class WomanTippingHand
{

    public const SYMBOL = "💁‍♀️";

    public const HEX = "1F481 200D 2640 FE0F";

    public const CODE = "\u{1F481}\u{200D}\u{2640}\u{FE0F}";

    public const NAME = 'woman tipping hand';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-gesture';

    public const NAME_WITH_UNDERSCORES = 'woman_tipping_hand';

    public const TAGS = 'information';

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
