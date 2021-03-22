<?php

namespace Wnx\Emojis\Emojis;

/**
 * OldWoman Emoji class.
 *
 * @version v13.1
 *
 **/
class OldWoman {

    public const SYMBOL = "👵";

    public const HEX = "1F475";

    public const CODE = "\u{1F475}";

    public const NAME = 'old woman';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person';

    public const NAME_WITH_UNDERSCORES = 'old_woman';

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