<?php

namespace Wnx\Emojis\Emojis;

/**
 * DoubleCurlyLoop Emoji class.
 *
 * @version v14.0
 *
 **/
class DoubleCurlyLoop
{

    public const SYMBOL = "➿";

    public const HEX = "27BF";

    public const CODE = "\u{27BF}";

    public const NAME = 'double curly loop';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'other-symbol';

    public const NAME_WITH_UNDERSCORES = 'double_curly_loop';

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
