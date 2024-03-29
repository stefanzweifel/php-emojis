<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanFeedingBaby Emoji class.
 *
 * @version v14.0
 *
 **/
class WomanFeedingBaby
{

    public const SYMBOL = "👩‍🍼";

    public const HEX = "1F469 200D 1F37C";

    public const CODE = "\u{1F469}\u{200D}\u{1F37C}";

    public const NAME = 'woman feeding baby';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'woman_feeding_baby';

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
