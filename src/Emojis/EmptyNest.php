<?php

namespace Wnx\Emojis\Emojis;

/**
 * EmptyNest Emoji class.
 *
 * @version v14.0
 *
 **/
class EmptyNest
{

    public const SYMBOL = "🪹";

    public const HEX = "1FAB9";

    public const CODE = "\u{1FAB9}";

    public const NAME = 'empty nest';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'plant-other';

    public const NAME_WITH_UNDERSCORES = 'empty_nest';

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
