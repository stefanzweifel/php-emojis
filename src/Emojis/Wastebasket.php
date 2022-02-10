<?php

namespace Wnx\Emojis\Emojis;

/**
 * Wastebasket Emoji class.
 *
 * @version v14.0
 *
 **/
class Wastebasket
{

    public const SYMBOL = "🗑️";

    public const HEX = "1F5D1 FE0F";

    public const CODE = "\u{1F5D1}\u{FE0F}";

    public const NAME = 'wastebasket';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'office';

    public const NAME_WITH_UNDERSCORES = 'wastebasket';

    public const TAGS = 'trash';

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
