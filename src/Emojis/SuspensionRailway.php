<?php

namespace Wnx\Emojis\Emojis;

/**
 * SuspensionRailway Emoji class.
 *
 * @version v13.1
 *
 **/
class SuspensionRailway
{
    public const SYMBOL = "🚟";

    public const HEX = "1F69F";

    public const CODE = "\u{1F69F}";

    public const NAME = 'suspension railway';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'transport-air';

    public const NAME_WITH_UNDERSCORES = 'suspension_railway';

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
