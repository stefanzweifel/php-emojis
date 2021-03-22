<?php

namespace Wnx\Emojis\Emojis;

/**
 * Keycap3 Emoji class.
 *
 * @version v13.1
 *
 **/
class Keycap3
{
    public const SYMBOL = "3️⃣";

    public const HEX = "0033 FE0F 20E3";

    public const CODE = "\u{0033}\u{FE0F}\u{20E3}";

    public const NAME = 'keycap 3';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'keycap';

    public const NAME_WITH_UNDERSCORES = 'keycap_3';

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
