<?php

namespace Wnx\Emojis\Emojis;

/**
 * Shamrock Emoji class.
 *
 * @version v14.0
 *
 **/
class Shamrock
{

    public const SYMBOL = "☘️";

    public const HEX = "2618 FE0F";

    public const CODE = "\u{2618}\u{FE0F}";

    public const NAME = 'shamrock';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'plant-other';

    public const NAME_WITH_UNDERSCORES = 'shamrock';

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
