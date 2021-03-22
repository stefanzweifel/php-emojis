<?php

namespace Wnx\Emojis\Emojis;

/**
 * DeafWoman Emoji class.
 *
 * @version v13.1
 *
 **/
class DeafWoman {

    public const SYMBOL = "🧏‍♀️";

    public const HEX = "1F9CF 200D 2640 FE0F";

    public const CODE = "\u{1F9CF}\u{200D}\u{2640}\u{FE0F}";

    public const NAME = 'deaf woman';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-gesture';

    public const NAME_WITH_UNDERSCORES = 'deaf_woman';

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
