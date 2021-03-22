<?php

namespace Wnx\Emojis\Emojis;

/**
 * TopHat Emoji class.
 *
 * @version v13.1
 *
 **/
class TopHat {

    public const SYMBOL = "🎩";

    public const HEX = "1F3A9";

    public const CODE = "\u{1F3A9}";

    public const NAME = 'top hat';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'clothing';

    public const NAME_WITH_UNDERSCORES = 'top_hat';

    public const TAGS = 'hat classy';

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
