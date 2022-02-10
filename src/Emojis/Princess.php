<?php

namespace Wnx\Emojis\Emojis;

/**
 * Princess Emoji class.
 *
 * @version v14.0
 *
 **/
class Princess
{

    public const SYMBOL = "👸";

    public const HEX = "1F478";

    public const CODE = "\u{1F478}";

    public const NAME = 'princess';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'princess';

    public const TAGS = 'crown royal';

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
