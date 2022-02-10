<?php

namespace Wnx\Emojis\Emojis;

/**
 * LockedWithKey Emoji class.
 *
 * @version v14.0
 *
 **/
class LockedWithKey
{

    public const SYMBOL = "🔐";

    public const HEX = "1F510";

    public const CODE = "\u{1F510}";

    public const NAME = 'locked with key';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'lock';

    public const NAME_WITH_UNDERSCORES = 'locked_with_key';

    public const TAGS = 'security';

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
