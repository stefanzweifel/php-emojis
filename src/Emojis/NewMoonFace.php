<?php

namespace Wnx\Emojis\Emojis;

/**
 * NewMoonFace Emoji class.
 *
 * @version v14.0
 *
 **/
class NewMoonFace
{

    public const SYMBOL = "🌚";

    public const HEX = "1F31A";

    public const CODE = "\u{1F31A}";

    public const NAME = 'new moon face';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'sky & weather';

    public const NAME_WITH_UNDERSCORES = 'new_moon_face';

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
