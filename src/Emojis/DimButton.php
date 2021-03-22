<?php

namespace Wnx\Emojis\Emojis;

/**
 * DimButton Emoji class.
 *
 * @version v13.1
 *
 **/
class DimButton {

    public const SYMBOL = "🔅";

    public const HEX = "1F505";

    public const CODE = "\u{1F505}";

    public const NAME = 'dim button';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'av-symbol';

    public const NAME_WITH_UNDERSCORES = 'dim_button';

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
