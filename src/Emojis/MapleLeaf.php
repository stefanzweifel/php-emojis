<?php

namespace Wnx\Emojis\Emojis;

/**
 * MapleLeaf Emoji class.
 *
 * @version v14.0
 *
 **/
class MapleLeaf
{

    public const SYMBOL = "🍁";

    public const HEX = "1F341";

    public const CODE = "\u{1F341}";

    public const NAME = 'maple leaf';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'plant-other';

    public const NAME_WITH_UNDERSCORES = 'maple_leaf';

    public const TAGS = 'canada';

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
