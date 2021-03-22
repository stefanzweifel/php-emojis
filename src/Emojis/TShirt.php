<?php

namespace Wnx\Emojis\Emojis;

/**
 * TShirt Emoji class.
 *
 * @version v13.1
 *
 **/
class TShirt {

    public const SYMBOL = "👕";

    public const HEX = "1F455";

    public const CODE = "\u{1F455}";

    public const NAME = 't-shirt';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'clothing';

    public const NAME_WITH_UNDERSCORES = 't-shirt';

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
