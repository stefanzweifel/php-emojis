<?php

namespace Wnx\Emojis\Emojis;

/**
 * PassportControl Emoji class.
 *
 * @version v13.1
 *
 **/
class PassportControl {

    public const SYMBOL = "🛂";

    public const HEX = "1F6C2";

    public const CODE = "\u{1F6C2}";

    public const NAME = 'passport control';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'transport-sign';

    public const NAME_WITH_UNDERSCORES = 'passport_control';

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
