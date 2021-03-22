<?php

namespace Wnx\Emojis\Emojis;

/**
 * RedHeart Emoji class.
 *
 * @version v13.1
 *
 **/
class RedHeart {

    public const SYMBOL = "❤️";

    public const HEX = "2764 FE0F";

    public const CODE = "\u{2764}\u{FE0F}";

    public const NAME = 'red heart';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'emotion';

    public const NAME_WITH_UNDERSCORES = 'red_heart';

    public const TAGS = 'love';

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
