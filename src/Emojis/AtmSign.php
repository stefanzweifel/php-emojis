<?php

namespace Wnx\Emojis\Emojis;

/**
 * AtmSign Emoji class.
 *
 * @version v14.0
 *
 **/
class AtmSign
{

    public const SYMBOL = "🏧";

    public const HEX = "1F3E7";

    public const CODE = "\u{1F3E7}";

    public const NAME = 'ATM sign';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'transport-sign';

    public const NAME_WITH_UNDERSCORES = 'ATM_sign';

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
