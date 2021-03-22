<?php

namespace Wnx\Emojis\Emojis;

/**
 * FleurDeLis Emoji class.
 *
 * @version v13.1
 *
 **/
class FleurDeLis {

    public const SYMBOL = "⚜️";

    public const HEX = "269C FE0F";

    public const CODE = "\u{269C}\u{FE0F}";

    public const NAME = 'fleur-de-lis';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'other-symbol';

    public const NAME_WITH_UNDERSCORES = 'fleur-de-lis';

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
