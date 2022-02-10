<?php

namespace Wnx\Emojis\Emojis;

/**
 * Unlocked Emoji class.
 *
 * @version v14.0
 *
 **/
class Unlocked
{

    public const SYMBOL = "🔓";

    public const HEX = "1F513";

    public const CODE = "\u{1F513}";

    public const NAME = 'unlocked';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'lock';

    public const NAME_WITH_UNDERSCORES = 'unlocked';

    public const TAGS = 'security';

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
