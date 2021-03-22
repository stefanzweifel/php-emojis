<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanCook Emoji class.
 *
 * @version v13.1
 *
 **/
class WomanCook
{
    public const SYMBOL = "👩‍🍳";

    public const HEX = "1F469 200D 1F373";

    public const CODE = "\u{1F469}\u{200D}\u{1F373}";

    public const NAME = 'woman cook';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'woman_cook';

    public const TAGS = 'chef';

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
