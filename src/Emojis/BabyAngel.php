<?php

namespace Wnx\Emojis\Emojis;

/**
 * BabyAngel Emoji class.
 *
 * @version v14.0
 *
 **/
class BabyAngel
{

    public const SYMBOL = "👼";

    public const HEX = "1F47C";

    public const CODE = "\u{1F47C}";

    public const NAME = 'baby angel';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-fantasy';

    public const NAME_WITH_UNDERSCORES = 'baby_angel';

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
