<?php

namespace Wnx\Emojis\Emojis;

/**
 * Goggles Emoji class.
 *
 * @version v14.0
 *
 **/
class Goggles
{

    public const SYMBOL = "🥽";

    public const HEX = "1F97D";

    public const CODE = "\u{1F97D}";

    public const NAME = 'goggles';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'clothing';

    public const NAME_WITH_UNDERSCORES = 'goggles';

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
