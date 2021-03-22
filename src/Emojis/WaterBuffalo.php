<?php

namespace Wnx\Emojis\Emojis;

/**
 * WaterBuffalo Emoji class.
 *
 * @version v13.1
 *
 **/
class WaterBuffalo
{
    public const SYMBOL = "🐃";

    public const HEX = "1F403";

    public const CODE = "\u{1F403}";

    public const NAME = 'water buffalo';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'animal-mammal';

    public const NAME_WITH_UNDERSCORES = 'water_buffalo';

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
