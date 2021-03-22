<?php

namespace Wnx\Emojis\Emojis;

/**
 * BlackHeart Emoji class.
 *
 * @version v13.1
 *
 **/
class BlackHeart
{
    public const SYMBOL = "🖤";

    public const HEX = "1F5A4";

    public const CODE = "\u{1F5A4}";

    public const NAME = 'black heart';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'emotion';

    public const NAME_WITH_UNDERSCORES = 'black_heart';

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
