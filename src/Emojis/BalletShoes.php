<?php

namespace Wnx\Emojis\Emojis;

/**
 * BalletShoes Emoji class.
 *
 * @version v13.1
 *
 **/
class BalletShoes
{
    public const SYMBOL = "🩰";

    public const HEX = "1FA70";

    public const CODE = "\u{1FA70}";

    public const NAME = 'ballet shoes';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'clothing';

    public const NAME_WITH_UNDERSCORES = 'ballet_shoes';

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
