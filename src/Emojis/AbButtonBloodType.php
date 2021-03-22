<?php

namespace Wnx\Emojis\Emojis;

/**
 * AbButtonBloodType Emoji class.
 *
 * @version v13.1
 *
 **/
class AbButtonBloodType {

    public const SYMBOL = "🆎";

    public const HEX = "1F18E";

    public const CODE = "\u{1F18E}";

    public const NAME = 'AB button (blood type)';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'alphanum';

    public const NAME_WITH_UNDERSCORES = 'AB_button_(blood_type)';

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
