<?php

namespace Wnx\Emojis\Emojis;

/**
 * SheafOfRice Emoji class.
 *
 * @version v13.1
 *
 **/
class SheafOfRice
{
    public const SYMBOL = "🌾";

    public const HEX = "1F33E";

    public const CODE = "\u{1F33E}";

    public const NAME = 'sheaf of rice';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'plant-other';

    public const NAME_WITH_UNDERSCORES = 'sheaf_of_rice';

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
