<?php

namespace Wnx\Emojis\Emojis;

/**
 * SmilingCatWithHeartEyes Emoji class.
 *
 * @version v14.0
 *
 **/
class SmilingCatWithHeartEyes
{

    public const SYMBOL = "😻";

    public const HEX = "1F63B";

    public const CODE = "\u{1F63B}";

    public const NAME = 'smiling cat with heart-eyes';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'cat-face';

    public const NAME_WITH_UNDERSCORES = 'smiling_cat_with_heart-eyes';

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
