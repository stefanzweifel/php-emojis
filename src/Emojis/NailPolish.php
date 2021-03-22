<?php

namespace Wnx\Emojis\Emojis;

/**
 * NailPolish Emoji class.
 *
 * @version v13.1
 *
 **/
class NailPolish {

    public const SYMBOL = "💅";

    public const HEX = "1F485";

    public const CODE = "\u{1F485}";

    public const NAME = 'nail polish';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-prop';

    public const NAME_WITH_UNDERSCORES = 'nail_polish';

    public const TAGS = 'beauty manicure';

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
