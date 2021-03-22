<?php

namespace Wnx\Emojis\Emojis;

/**
 * RightArrowCurvingLeft Emoji class.
 *
 * @version v13.1
 *
 **/
class RightArrowCurvingLeft {

    public const SYMBOL = "↩️";

    public const HEX = "21A9 FE0F";

    public const CODE = "\u{21A9}\u{FE0F}";

    public const NAME = 'right arrow curving left';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'arrow';

    public const NAME_WITH_UNDERSCORES = 'right_arrow_curving_left';

    public const TAGS = 'return';

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
