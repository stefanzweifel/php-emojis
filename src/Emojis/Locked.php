<?php

namespace Wnx\Emojis\Emojis;

/**
 * Locked Emoji class.
 *
 * @version v13.1
 *
 **/
class Locked
{
    public const SYMBOL = "🔒";

    public const HEX = "1F512";

    public const CODE = "\u{1F512}";

    public const NAME = 'locked';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'lock';

    public const NAME_WITH_UNDERSCORES = 'locked';

    public const TAGS = 'security private';

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
