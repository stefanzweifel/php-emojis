<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanDetective Emoji class.
 *
 * @version v13.1
 *
 **/
class WomanDetective {

    public const SYMBOL = "🕵️‍♀️";

    public const HEX = "1F575 FE0F 200D 2640 FE0F";

    public const CODE = "\u{1F575}\u{FE0F}\u{200D}\u{2640}\u{FE0F}";

    public const NAME = 'woman detective';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'woman_detective';

    public const TAGS = 'sleuth';

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