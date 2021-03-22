<?php

namespace Wnx\Emojis\Emojis;

/**
 * OpenHands Emoji class.
 *
 * @version v13.1
 *
 **/
class OpenHands {

    public const SYMBOL = "👐";

    public const HEX = "1F450";

    public const CODE = "\u{1F450}";

    public const NAME = 'open hands';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hands';

    public const NAME_WITH_UNDERSCORES = 'open_hands';

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
