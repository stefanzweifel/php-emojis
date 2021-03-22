<?php

namespace Wnx\Emojis\Emojis;

/**
 * MilitaryMedal Emoji class.
 *
 * @version v13.1
 *
 **/
class MilitaryMedal {

    public const SYMBOL = "🎖️";

    public const HEX = "1F396 FE0F";

    public const CODE = "\u{1F396}\u{FE0F}";

    public const NAME = 'military medal';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'award-medal';

    public const NAME_WITH_UNDERSCORES = 'military_medal';

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
