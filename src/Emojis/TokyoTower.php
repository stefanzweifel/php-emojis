<?php

namespace Wnx\Emojis\Emojis;

/**
 * TokyoTower Emoji class.
 *
 * @version v14.0
 *
 **/
class TokyoTower
{

    public const SYMBOL = "🗼";

    public const HEX = "1F5FC";

    public const CODE = "\u{1F5FC}";

    public const NAME = 'Tokyo tower';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'place-building';

    public const NAME_WITH_UNDERSCORES = 'Tokyo_tower';

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
