<?php

namespace Wnx\Emojis\Emojis;

/**
 * EndArrow Emoji class.
 *
 * @version v13.1
 *
 **/
class EndArrow {

    public const SYMBOL = "🔚";

    public const HEX = "1F51A";

    public const CODE = "\u{1F51A}";

    public const NAME = 'END arrow';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'arrow';

    public const NAME_WITH_UNDERSCORES = 'END_arrow';

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
