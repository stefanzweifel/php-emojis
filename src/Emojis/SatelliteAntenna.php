<?php

namespace Wnx\Emojis\Emojis;

/**
 * SatelliteAntenna Emoji class.
 *
 * @version v13.1
 *
 **/
class SatelliteAntenna {

    public const SYMBOL = "📡";

    public const HEX = "1F4E1";

    public const CODE = "\u{1F4E1}";

    public const NAME = 'satellite antenna';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'science';

    public const NAME_WITH_UNDERSCORES = 'satellite_antenna';

    public const TAGS = 'signal';

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
