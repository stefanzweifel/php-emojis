<?php

namespace Wnx\Emojis\Emojis;

/**
 * WavyDash Emoji class.
 *
 * @version v13.1
 *
 **/
class WavyDash {

    public const SYMBOL = "〰️";

    public const HEX = "3030 FE0F";

    public const CODE = "\u{3030}\u{FE0F}";

    public const NAME = 'wavy dash';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'punctuation';

    public const NAME_WITH_UNDERSCORES = 'wavy_dash';

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
