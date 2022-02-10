<?php

namespace Wnx\Emojis\Emojis;

/**
 * ForkAndKnifeWithPlate Emoji class.
 *
 * @version v14.0
 *
 **/
class ForkAndKnifeWithPlate
{

    public const SYMBOL = "🍽️";

    public const HEX = "1F37D FE0F";

    public const CODE = "\u{1F37D}\u{FE0F}";

    public const NAME = 'fork and knife with plate';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'dishware';

    public const NAME_WITH_UNDERSCORES = 'fork_and_knife_with_plate';

    public const TAGS = 'dining dinner';

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
