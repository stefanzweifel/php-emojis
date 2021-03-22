<?php

namespace Wnx\Emojis\Emojis;

/**
 * Anchor Emoji class.
 *
 * @version v13.1
 *
 **/
class Anchor
{
    public const SYMBOL = "⚓";

    public const HEX = "2693";

    public const CODE = "\u{2693}";

    public const NAME = 'anchor';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'transport-water';

    public const NAME_WITH_UNDERSCORES = 'anchor';

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
