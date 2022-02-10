<?php

namespace Wnx\Emojis\Emojis;

/**
 * YellowHeart Emoji class.
 *
 * @version v14.0
 *
 **/
class YellowHeart
{

    public const SYMBOL = "💛";

    public const HEX = "1F49B";

    public const CODE = "\u{1F49B}";

    public const NAME = 'yellow heart';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'emotion';

    public const NAME_WITH_UNDERSCORES = 'yellow_heart';

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
