<?php

namespace Wnx\Emojis\Emojis;

/**
 * MagicWand Emoji class.
 *
 * @version v13.1
 *
 **/
class MagicWand
{
    public const SYMBOL = "🪄";

    public const HEX = "1FA84";

    public const CODE = "\u{1FA84}";

    public const NAME = 'magic wand';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'game';

    public const NAME_WITH_UNDERSCORES = 'magic_wand';

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
