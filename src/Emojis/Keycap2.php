<?php

namespace Wnx\Emojis\Emojis;

/**
 * Keycap2 Emoji class.
 *
 * @version v14.0
 *
 **/
class Keycap2
{

    public const SYMBOL = "2️⃣";

    public const HEX = "0032 FE0F 20E3";

    public const CODE = "\u{0032}\u{FE0F}\u{20E3}";

    public const NAME = 'keycap 2';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'keycap';

    public const NAME_WITH_UNDERSCORES = 'keycap_2';

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
