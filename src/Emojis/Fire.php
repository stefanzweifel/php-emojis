<?php

namespace Wnx\Emojis\Emojis;

/**
 * Fire Emoji class.
 *
 * @version v13.1
 *
 **/
class Fire {

    public const SYMBOL = "🔥";

    public const HEX = "1F525";

    public const CODE = "\u{1F525}";

    public const NAME = 'fire';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'sky & weather';

    public const NAME_WITH_UNDERSCORES = 'fire';

    public const TAGS = 'burn';

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