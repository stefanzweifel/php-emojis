<?php

namespace Wnx\Emojis\Emojis;

/**
 * Keycap10 Emoji class.
 *
 * @version v13.1
 *
 **/
class Keycap10 {

    public const SYMBOL = "🔟";

    public const HEX = "1F51F";

    public const CODE = "\u{1F51F}";

    public const NAME = 'keycap 10';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'keycap';

    public const NAME_WITH_UNDERSCORES = 'keycap_10';

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
