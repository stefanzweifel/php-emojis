<?php

namespace Wnx\Emojis\Emojis;

/**
 * Seat Emoji class.
 *
 * @version v14.0
 *
 **/
class Seat
{

    public const SYMBOL = "💺";

    public const HEX = "1F4BA";

    public const CODE = "\u{1F4BA}";

    public const NAME = 'seat';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'transport-air';

    public const NAME_WITH_UNDERSCORES = 'seat';

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
