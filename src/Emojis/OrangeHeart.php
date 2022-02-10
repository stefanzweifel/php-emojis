<?php

namespace Wnx\Emojis\Emojis;

/**
 * OrangeHeart Emoji class.
 *
 * @version v14.0
 *
 **/
class OrangeHeart
{

    public const SYMBOL = "🧡";

    public const HEX = "1F9E1";

    public const CODE = "\u{1F9E1}";

    public const NAME = 'orange heart';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'emotion';

    public const NAME_WITH_UNDERSCORES = 'orange_heart';

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
