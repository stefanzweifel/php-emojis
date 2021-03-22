<?php

namespace Wnx\Emojis\Emojis;

/**
 * UpRightArrow Emoji class.
 *
 * @version v13.1
 *
 **/
class UpRightArrow
{
    public const SYMBOL = "↗️";

    public const HEX = "2197 FE0F";

    public const CODE = "\u{2197}\u{FE0F}";

    public const NAME = 'up-right arrow';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'arrow';

    public const NAME_WITH_UNDERSCORES = 'up-right_arrow';

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
