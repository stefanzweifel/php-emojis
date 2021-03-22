<?php

namespace Wnx\Emojis\Emojis;

/**
 * PlaceOfWorship Emoji class.
 *
 * @version v13.1
 *
 **/
class PlaceOfWorship {

    public const SYMBOL = "🛐";

    public const HEX = "1F6D0";

    public const CODE = "\u{1F6D0}";

    public const NAME = 'place of worship';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'religion';

    public const NAME_WITH_UNDERSCORES = 'place_of_worship';

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