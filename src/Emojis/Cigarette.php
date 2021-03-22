<?php

namespace Wnx\Emojis\Emojis;

/**
 * Cigarette Emoji class.
 *
 * @version v13.1
 *
 **/
class Cigarette
{
    public const SYMBOL = "🚬";

    public const HEX = "1F6AC";

    public const CODE = "\u{1F6AC}";

    public const NAME = 'cigarette';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'other-object';

    public const NAME_WITH_UNDERSCORES = 'cigarette';

    public const TAGS = 'cigarette';

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
