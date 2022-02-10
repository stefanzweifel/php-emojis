<?php

namespace Wnx\Emojis\Emojis;

/**
 * Backpack Emoji class.
 *
 * @version v14.0
 *
 **/
class Backpack
{

    public const SYMBOL = "🎒";

    public const HEX = "1F392";

    public const CODE = "\u{1F392}";

    public const NAME = 'backpack';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'clothing';

    public const NAME_WITH_UNDERSCORES = 'backpack';

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
