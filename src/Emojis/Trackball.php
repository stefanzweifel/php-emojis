<?php

namespace Wnx\Emojis\Emojis;

/**
 * Trackball Emoji class.
 *
 * @version v13.1
 *
 **/
class Trackball {

    public const SYMBOL = "🖲️";

    public const HEX = "1F5B2 FE0F";

    public const CODE = "\u{1F5B2}\u{FE0F}";

    public const NAME = 'trackball';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'computer';

    public const NAME_WITH_UNDERSCORES = 'trackball';

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
