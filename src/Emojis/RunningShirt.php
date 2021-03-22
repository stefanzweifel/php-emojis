<?php

namespace Wnx\Emojis\Emojis;

/**
 * RunningShirt Emoji class.
 *
 * @version v13.1
 *
 **/
class RunningShirt
{
    public const SYMBOL = "🎽";

    public const HEX = "1F3BD";

    public const CODE = "\u{1F3BD}";

    public const NAME = 'running shirt';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'sport';

    public const NAME_WITH_UNDERSCORES = 'running_shirt';

    public const TAGS = 'marathon';

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
