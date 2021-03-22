<?php

namespace Wnx\Emojis\Emojis;

/**
 * PolarBear Emoji class.
 *
 * @version v13.1
 *
 **/
class PolarBear
{
    public const SYMBOL = "🐻‍❄️";

    public const HEX = "1F43B 200D 2744 FE0F";

    public const CODE = "\u{1F43B}\u{200D}\u{2744}\u{FE0F}";

    public const NAME = 'polar bear';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'animal-mammal';

    public const NAME_WITH_UNDERSCORES = 'polar_bear';

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
