<?php

namespace Wnx\Emojis\Emojis;

/**
 * WaterPistol Emoji class.
 *
 * @version v13.1
 *
 **/
class WaterPistol
{
    public const SYMBOL = "🔫";

    public const HEX = "1F52B";

    public const CODE = "\u{1F52B}";

    public const NAME = 'water pistol';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'tool';

    public const NAME_WITH_UNDERSCORES = 'water_pistol';

    public const TAGS = 'shoot weapon';

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
