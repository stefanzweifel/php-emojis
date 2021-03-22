<?php

namespace Wnx\Emojis\Emojis;

/**
 * NoMobilePhones Emoji class.
 *
 * @version v13.1
 *
 **/
class NoMobilePhones {

    public const SYMBOL = "📵";

    public const HEX = "1F4F5";

    public const CODE = "\u{1F4F5}";

    public const NAME = 'no mobile phones';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'warning';

    public const NAME_WITH_UNDERSCORES = 'no_mobile_phones';

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
