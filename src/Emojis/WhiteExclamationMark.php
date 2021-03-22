<?php

namespace Wnx\Emojis\Emojis;

/**
 * WhiteExclamationMark Emoji class.
 *
 * @version v13.1
 *
 **/
class WhiteExclamationMark
{
    public const SYMBOL = "❕";

    public const HEX = "2755";

    public const CODE = "\u{2755}";

    public const NAME = 'white exclamation mark';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'punctuation';

    public const NAME_WITH_UNDERSCORES = 'white_exclamation_mark';

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
