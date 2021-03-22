<?php

namespace Wnx\Emojis\Emojis;

/**
 * MrsClaus Emoji class.
 *
 * @version v13.1
 *
 **/
class MrsClaus {

    public const SYMBOL = "🤶";

    public const HEX = "1F936";

    public const CODE = "\u{1F936}";

    public const NAME = 'Mrs. Claus';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-fantasy';

    public const NAME_WITH_UNDERSCORES = 'Mrs._Claus';

    public const TAGS = 'santa';

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
