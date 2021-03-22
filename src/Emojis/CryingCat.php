<?php

namespace Wnx\Emojis\Emojis;

/**
 * CryingCat Emoji class.
 *
 * @version v13.1
 *
 **/
class CryingCat
{
    public const SYMBOL = "😿";

    public const HEX = "1F63F";

    public const CODE = "\u{1F63F}";

    public const NAME = 'crying cat';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'cat-face';

    public const NAME_WITH_UNDERSCORES = 'crying_cat';

    public const TAGS = 'sad tear';

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
