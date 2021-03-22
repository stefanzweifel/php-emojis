<?php

namespace Wnx\Emojis\Emojis;

/**
 * WorldMap Emoji class.
 *
 * @version v13.1
 *
 **/
class WorldMap {

    public const SYMBOL = "🗺️";

    public const HEX = "1F5FA FE0F";

    public const CODE = "\u{1F5FA}\u{FE0F}";

    public const NAME = 'world map';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'place-map';

    public const NAME_WITH_UNDERSCORES = 'world_map';

    public const TAGS = 'travel';

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
