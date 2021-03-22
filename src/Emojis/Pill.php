<?php

namespace Wnx\Emojis\Emojis;

/**
 * Pill Emoji class.
 *
 * @version v13.1
 *
 **/
class Pill
{
    public const SYMBOL = "💊";

    public const HEX = "1F48A";

    public const CODE = "\u{1F48A}";

    public const NAME = 'pill';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'medical';

    public const NAME_WITH_UNDERSCORES = 'pill';

    public const TAGS = 'health medicine';

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
