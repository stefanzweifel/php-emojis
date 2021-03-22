<?php

namespace Wnx\Emojis\Emojis;

/**
 * Sun Emoji class.
 *
 * @version v13.1
 *
 **/
class Sun {

    public const SYMBOL = "☀️";

    public const HEX = "2600 FE0F";

    public const CODE = "\u{2600}\u{FE0F}";

    public const NAME = 'sun';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'sky & weather';

    public const NAME_WITH_UNDERSCORES = 'sun';

    public const TAGS = 'weather';

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
