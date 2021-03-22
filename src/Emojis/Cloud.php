<?php

namespace Wnx\Emojis\Emojis;

/**
 * Cloud Emoji class.
 *
 * @version v13.1
 *
 **/
class Cloud {

    public const SYMBOL = "☁️";

    public const HEX = "2601 FE0F";

    public const CODE = "\u{2601}\u{FE0F}";

    public const NAME = 'cloud';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'sky & weather';

    public const NAME_WITH_UNDERSCORES = 'cloud';

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
