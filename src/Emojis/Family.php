<?php

namespace Wnx\Emojis\Emojis;

/**
 * Family Emoji class.
 *
 * @version v13.1
 *
 **/
class Family
{
    public const SYMBOL = "👪";

    public const HEX = "1F46A";

    public const CODE = "\u{1F46A}";

    public const NAME = 'family';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'family';

    public const NAME_WITH_UNDERSCORES = 'family';

    public const TAGS = 'home parents child';

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
