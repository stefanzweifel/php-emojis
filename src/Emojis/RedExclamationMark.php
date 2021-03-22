<?php

namespace Wnx\Emojis\Emojis;

/**
 * RedExclamationMark Emoji class.
 *
 * @version v13.1
 *
 **/
class RedExclamationMark {

    public const SYMBOL = "❗";

    public const HEX = "2757";

    public const CODE = "\u{2757}";

    public const NAME = 'red exclamation mark';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'punctuation';

    public const NAME_WITH_UNDERSCORES = 'red_exclamation_mark';

    public const TAGS = 'bang';

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
