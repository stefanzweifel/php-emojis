<?php

namespace Wnx\Emojis\Emojis;

/**
 * Spoon Emoji class.
 *
 * @version v14.0
 *
 **/
class Spoon
{

    public const SYMBOL = "🥄";

    public const HEX = "1F944";

    public const CODE = "\u{1F944}";

    public const NAME = 'spoon';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'dishware';

    public const NAME_WITH_UNDERSCORES = 'spoon';

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
