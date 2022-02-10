<?php

namespace Wnx\Emojis\Emojis;

/**
 * Bald Emoji class.
 *
 * @version v14.0
 *
 **/
class Bald
{

    public const SYMBOL = "🦲";

    public const HEX = "1F9B2";

    public const CODE = "\u{1F9B2}";

    public const NAME = 'bald';

    public const GROUP = 'Component';

    public const SUBGROUP = 'hair-style';

    public const NAME_WITH_UNDERSCORES = 'bald';

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
