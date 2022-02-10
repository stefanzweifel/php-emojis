<?php

namespace Wnx\Emojis\Emojis;

/**
 * FallenLeaf Emoji class.
 *
 * @version v14.0
 *
 **/
class FallenLeaf
{

    public const SYMBOL = "🍂";

    public const HEX = "1F342";

    public const CODE = "\u{1F342}";

    public const NAME = 'fallen leaf';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'plant-other';

    public const NAME_WITH_UNDERSCORES = 'fallen_leaf';

    public const TAGS = 'autumn';

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
