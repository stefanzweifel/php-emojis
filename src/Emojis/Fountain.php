<?php

namespace Wnx\Emojis\Emojis;

/**
 * Fountain Emoji class.
 *
 * @version v13.1
 *
 **/
class Fountain {

    public const SYMBOL = "⛲";

    public const HEX = "26F2";

    public const CODE = "\u{26F2}";

    public const NAME = 'fountain';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'place-other';

    public const NAME_WITH_UNDERSCORES = 'fountain';

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
