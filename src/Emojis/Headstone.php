<?php

namespace Wnx\Emojis\Emojis;

/**
 * Headstone Emoji class.
 *
 * @version v14.0
 *
 **/
class Headstone
{

    public const SYMBOL = "🪦";

    public const HEX = "1FAA6";

    public const CODE = "\u{1FAA6}";

    public const NAME = 'headstone';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'other-object';

    public const NAME_WITH_UNDERSCORES = 'headstone';

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
