<?php

namespace Wnx\Emojis\Emojis;

/**
 * Speedboat Emoji class.
 *
 * @version v14.0
 *
 **/
class Speedboat
{

    public const SYMBOL = "🚤";

    public const HEX = "1F6A4";

    public const CODE = "\u{1F6A4}";

    public const NAME = 'speedboat';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'transport-water';

    public const NAME_WITH_UNDERSCORES = 'speedboat';

    public const TAGS = 'ship';

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
