<?php

namespace Wnx\Emojis\Emojis;

/**
 * CowFace Emoji class.
 *
 * @version v13.1
 *
 **/
class CowFace
{
    public const SYMBOL = "🐮";

    public const HEX = "1F42E";

    public const CODE = "\u{1F42E}";

    public const NAME = 'cow face';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'animal-mammal';

    public const NAME_WITH_UNDERSCORES = 'cow_face';

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
