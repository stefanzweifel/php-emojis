<?php

namespace Wnx\Emojis\Emojis;

/**
 * DeciduousTree Emoji class.
 *
 * @version v14.0
 *
 **/
class DeciduousTree
{

    public const SYMBOL = "🌳";

    public const HEX = "1F333";

    public const CODE = "\u{1F333}";

    public const NAME = 'deciduous tree';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'plant-other';

    public const NAME_WITH_UNDERSCORES = 'deciduous_tree';

    public const TAGS = 'wood';

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
