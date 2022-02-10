<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanCurlyHair Emoji class.
 *
 * @version v14.0
 *
 **/
class WomanCurlyHair
{

    public const SYMBOL = "👩‍🦱";

    public const HEX = "1F469 200D 1F9B1";

    public const CODE = "\u{1F469}\u{200D}\u{1F9B1}";

    public const NAME = 'woman curly hair';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person';

    public const NAME_WITH_UNDERSCORES = 'woman_curly_hair';

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
