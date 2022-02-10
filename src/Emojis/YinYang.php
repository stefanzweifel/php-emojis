<?php

namespace Wnx\Emojis\Emojis;

/**
 * YinYang Emoji class.
 *
 * @version v14.0
 *
 **/
class YinYang
{

    public const SYMBOL = "☯️";

    public const HEX = "262F FE0F";

    public const CODE = "\u{262F}\u{FE0F}";

    public const NAME = 'yin yang';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'religion';

    public const NAME_WITH_UNDERSCORES = 'yin_yang';

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
