<?php

namespace Wnx\Emojis\Emojis;

/**
 * Detective Emoji class.
 *
 * @version v14.0
 *
 **/
class Detective
{

    public const SYMBOL = "🕵️";

    public const HEX = "1F575 FE0F";

    public const CODE = "\u{1F575}\u{FE0F}";

    public const NAME = 'detective';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'detective';

    public const TAGS = 'sleuth';

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
