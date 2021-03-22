<?php

namespace Wnx\Emojis\Emojis;

/**
 * Sparkles Emoji class.
 *
 * @version v13.1
 *
 **/
class Sparkles
{
    public const SYMBOL = "✨";

    public const HEX = "2728";

    public const CODE = "\u{2728}";

    public const NAME = 'sparkles';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'event';

    public const NAME_WITH_UNDERSCORES = 'sparkles';

    public const TAGS = 'shiny';

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
