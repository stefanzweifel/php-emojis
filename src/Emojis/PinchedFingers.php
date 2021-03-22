<?php

namespace Wnx\Emojis\Emojis;

/**
 * PinchedFingers Emoji class.
 *
 * @version v13.1
 *
 **/
class PinchedFingers {

    public const SYMBOL = "🤌";

    public const HEX = "1F90C";

    public const CODE = "\u{1F90C}";

    public const NAME = 'pinched fingers';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-partial';

    public const NAME_WITH_UNDERSCORES = 'pinched_fingers';

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
