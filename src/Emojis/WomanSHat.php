<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanSHat Emoji class.
 *
 * @version v13.1
 *
 **/
class WomanSHat {

    public const SYMBOL = "👒";

    public const HEX = "1F452";

    public const CODE = "\u{1F452}";

    public const NAME = 'woman’s hat';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'clothing';

    public const NAME_WITH_UNDERSCORES = 'woman’s_hat';

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
