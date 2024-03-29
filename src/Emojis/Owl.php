<?php

namespace Wnx\Emojis\Emojis;

/**
 * Owl Emoji class.
 *
 * @version v14.0
 *
 **/
class Owl
{

    public const SYMBOL = "🦉";

    public const HEX = "1F989";

    public const CODE = "\u{1F989}";

    public const NAME = 'owl';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'animal-bird';

    public const NAME_WITH_UNDERSCORES = 'owl';

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
