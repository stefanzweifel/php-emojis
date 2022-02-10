<?php

namespace Wnx\Emojis\Emojis;

/**
 * FastUpButton Emoji class.
 *
 * @version v14.0
 *
 **/
class FastUpButton
{

    public const SYMBOL = "⏫";

    public const HEX = "23EB";

    public const CODE = "\u{23EB}";

    public const NAME = 'fast up button';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'av-symbol';

    public const NAME_WITH_UNDERSCORES = 'fast_up_button';

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
