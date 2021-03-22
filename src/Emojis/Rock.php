<?php

namespace Wnx\Emojis\Emojis;

/**
 * Rock Emoji class.
 *
 * @version v13.1
 *
 **/
class Rock
{
    public const SYMBOL = "🪨";

    public const HEX = "1FAA8";

    public const CODE = "\u{1FAA8}";

    public const NAME = 'rock';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'place-building';

    public const NAME_WITH_UNDERSCORES = 'rock';

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
