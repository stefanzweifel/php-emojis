<?php

namespace Wnx\Emojis\Emojis;

/**
 * Compass Emoji class.
 *
 * @version v13.1
 *
 **/
class Compass
{
    public const SYMBOL = "🧭";

    public const HEX = "1F9ED";

    public const CODE = "\u{1F9ED}";

    public const NAME = 'compass';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'place-map';

    public const NAME_WITH_UNDERSCORES = 'compass';

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
