<?php

namespace Wnx\Emojis\Emojis;

/**
 * PerformingArts Emoji class.
 *
 * @version v14.0
 *
 **/
class PerformingArts
{

    public const SYMBOL = "🎭";

    public const HEX = "1F3AD";

    public const CODE = "\u{1F3AD}";

    public const NAME = 'performing arts';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'arts & crafts';

    public const NAME_WITH_UNDERSCORES = 'performing_arts';

    public const TAGS = 'theater drama';

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
