<?php

namespace Wnx\Emojis\Emojis;

/**
 * CurlyLoop Emoji class.
 *
 * @version v14.0
 *
 **/
class CurlyLoop
{

    public const SYMBOL = "➰";

    public const HEX = "27B0";

    public const CODE = "\u{27B0}";

    public const NAME = 'curly loop';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'other-symbol';

    public const NAME_WITH_UNDERSCORES = 'curly_loop';

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
