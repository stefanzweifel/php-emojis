<?php

namespace Wnx\Emojis\Emojis;

/**
 * Parachute Emoji class.
 *
 * @version v14.0
 *
 **/
class Parachute
{

    public const SYMBOL = "🪂";

    public const HEX = "1FA82";

    public const CODE = "\u{1FA82}";

    public const NAME = 'parachute';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'transport-air';

    public const NAME_WITH_UNDERSCORES = 'parachute';

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
