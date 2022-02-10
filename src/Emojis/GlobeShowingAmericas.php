<?php

namespace Wnx\Emojis\Emojis;

/**
 * GlobeShowingAmericas Emoji class.
 *
 * @version v14.0
 *
 **/
class GlobeShowingAmericas
{

    public const SYMBOL = "🌎";

    public const HEX = "1F30E";

    public const CODE = "\u{1F30E}";

    public const NAME = 'globe showing Americas';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'place-map';

    public const NAME_WITH_UNDERSCORES = 'globe_showing_Americas';

    public const TAGS = 'globe world international';

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
