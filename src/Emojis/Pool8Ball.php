<?php

namespace Wnx\Emojis\Emojis;

/**
 * Pool8Ball Emoji class.
 *
 * @version v13.1
 *
 **/
class Pool8Ball {

    public const SYMBOL = "🎱";

    public const HEX = "1F3B1";

    public const CODE = "\u{1F3B1}";

    public const NAME = 'pool 8 ball';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'game';

    public const NAME_WITH_UNDERSCORES = 'pool_8_ball';

    public const TAGS = 'pool billiards';

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
