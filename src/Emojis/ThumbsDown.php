<?php

namespace Wnx\Emojis\Emojis;

/**
 * ThumbsDown Emoji class.
 *
 * @version v13.1
 *
 **/
class ThumbsDown {

    public const SYMBOL = "👎";

    public const HEX = "1F44E";

    public const CODE = "\u{1F44E}";

    public const NAME = 'thumbs down';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-closed';

    public const NAME_WITH_UNDERSCORES = 'thumbs_down';

    public const TAGS = 'disapprove bury';

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
