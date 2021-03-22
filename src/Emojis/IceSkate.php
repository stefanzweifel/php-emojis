<?php

namespace Wnx\Emojis\Emojis;

/**
 * IceSkate Emoji class.
 *
 * @version v13.1
 *
 **/
class IceSkate {

    public const SYMBOL = "⛸️";

    public const HEX = "26F8 FE0F";

    public const CODE = "\u{26F8}\u{FE0F}";

    public const NAME = 'ice skate';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'sport';

    public const NAME_WITH_UNDERSCORES = 'ice_skate';

    public const TAGS = 'skating';

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
