<?php

namespace Wnx\Emojis\Emojis;

/**
 * CatWithTearsOfJoy Emoji class.
 *
 * @version v13.1
 *
 **/
class CatWithTearsOfJoy
{
    public const SYMBOL = "😹";

    public const HEX = "1F639";

    public const CODE = "\u{1F639}";

    public const NAME = 'cat with tears of joy';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'cat-face';

    public const NAME_WITH_UNDERSCORES = 'cat_with_tears_of_joy';

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
