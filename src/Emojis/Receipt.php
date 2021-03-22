<?php

namespace Wnx\Emojis\Emojis;

/**
 * Receipt Emoji class.
 *
 * @version v13.1
 *
 **/
class Receipt {

    public const SYMBOL = "🧾";

    public const HEX = "1F9FE";

    public const CODE = "\u{1F9FE}";

    public const NAME = 'receipt';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'money';

    public const NAME_WITH_UNDERSCORES = 'receipt';

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
