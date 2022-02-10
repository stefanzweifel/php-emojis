<?php

namespace Wnx\Emojis\Emojis;

/**
 * ClassicalBuilding Emoji class.
 *
 * @version v14.0
 *
 **/
class ClassicalBuilding
{

    public const SYMBOL = "🏛️";

    public const HEX = "1F3DB FE0F";

    public const CODE = "\u{1F3DB}\u{FE0F}";

    public const NAME = 'classical building';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'place-building';

    public const NAME_WITH_UNDERSCORES = 'classical_building';

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
