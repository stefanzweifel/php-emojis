<?php

namespace Wnx\Emojis\Emojis;

/**
 * Foggy Emoji class.
 *
 * @version v13.1
 *
 **/
class Foggy {

    public const SYMBOL = "🌁";

    public const HEX = "1F301";

    public const CODE = "\u{1F301}";

    public const NAME = 'foggy';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'place-other';

    public const NAME_WITH_UNDERSCORES = 'foggy';

    public const TAGS = 'karl';

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
