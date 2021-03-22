<?php

namespace Wnx\Emojis\Emojis;

/**
 * IndexPointingUp Emoji class.
 *
 * @version v13.1
 *
 **/
class IndexPointingUp {

    public const SYMBOL = "☝️";

    public const HEX = "261D FE0F";

    public const CODE = "\u{261D}\u{FE0F}";

    public const NAME = 'index pointing up';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-single-finger';

    public const NAME_WITH_UNDERSCORES = 'index_pointing_up';

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
