<?php

namespace Wnx\Emojis\Emojis;

/**
 * Pager Emoji class.
 *
 * @version v14.0
 *
 **/
class Pager
{

    public const SYMBOL = "📟";

    public const HEX = "1F4DF";

    public const CODE = "\u{1F4DF}";

    public const NAME = 'pager';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'phone';

    public const NAME_WITH_UNDERSCORES = 'pager';

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
