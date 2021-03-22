<?php

namespace Wnx\Emojis\Emojis;

/**
 * GlobeWithMeridians Emoji class.
 *
 * @version v13.1
 *
 **/
class GlobeWithMeridians {

    public const SYMBOL = "🌐";

    public const HEX = "1F310";

    public const CODE = "\u{1F310}";

    public const NAME = 'globe with meridians';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'place-map';

    public const NAME_WITH_UNDERSCORES = 'globe_with_meridians';

    public const TAGS = 'world global international';

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
