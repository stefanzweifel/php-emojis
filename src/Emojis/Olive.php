<?php

namespace Wnx\Emojis\Emojis;

/**
 * Olive Emoji class.
 *
 * @version v13.1
 *
 **/
class Olive
{
    public const SYMBOL = "🫒";

    public const HEX = "1FAD2";

    public const CODE = "\u{1FAD2}";

    public const NAME = 'olive';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'food-fruit';

    public const NAME_WITH_UNDERSCORES = 'olive';

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
