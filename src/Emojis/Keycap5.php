<?php

namespace Wnx\Emojis\Emojis;

/**
 * Keycap5 Emoji class.
 *
 * @version v13.1
 *
 **/
class Keycap5
{
    public const SYMBOL = "5️⃣";

    public const HEX = "0035 FE0F 20E3";

    public const CODE = "\u{0035}\u{FE0F}\u{20E3}";

    public const NAME = 'keycap 5';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'keycap';

    public const NAME_WITH_UNDERSCORES = 'keycap_5';

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
