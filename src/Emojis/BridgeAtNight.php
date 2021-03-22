<?php

namespace Wnx\Emojis\Emojis;

/**
 * BridgeAtNight Emoji class.
 *
 * @version v13.1
 *
 **/
class BridgeAtNight
{
    public const SYMBOL = "🌉";

    public const HEX = "1F309";

    public const CODE = "\u{1F309}";

    public const NAME = 'bridge at night';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'place-other';

    public const NAME_WITH_UNDERSCORES = 'bridge_at_night';

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
