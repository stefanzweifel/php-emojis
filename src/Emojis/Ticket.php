<?php

namespace Wnx\Emojis\Emojis;

/**
 * Ticket Emoji class.
 *
 * @version v14.0
 *
 **/
class Ticket
{

    public const SYMBOL = "🎫";

    public const HEX = "1F3AB";

    public const CODE = "\u{1F3AB}";

    public const NAME = 'ticket';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'event';

    public const NAME_WITH_UNDERSCORES = 'ticket';

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
