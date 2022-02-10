<?php

namespace Wnx\Emojis\Emojis;

/**
 * Dove Emoji class.
 *
 * @version v14.0
 *
 **/
class Dove
{

    public const SYMBOL = "🕊️";

    public const HEX = "1F54A FE0F";

    public const CODE = "\u{1F54A}\u{FE0F}";

    public const NAME = 'dove';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'animal-bird';

    public const NAME_WITH_UNDERSCORES = 'dove';

    public const TAGS = 'peace';

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
