<?php

namespace Wnx\Emojis\Emojis;

/**
 * Wrench Emoji class.
 *
 * @version v14.0
 *
 **/
class Wrench
{

    public const SYMBOL = "🔧";

    public const HEX = "1F527";

    public const CODE = "\u{1F527}";

    public const NAME = 'wrench';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'tool';

    public const NAME_WITH_UNDERSCORES = 'wrench';

    public const TAGS = 'tool';

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
