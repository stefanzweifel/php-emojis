<?php

namespace Wnx\Emojis\Emojis;

/**
 * RaisedHand Emoji class.
 *
 * @version v13.1
 *
 **/
class RaisedHand
{
    public const SYMBOL = "✋";

    public const HEX = "270B";

    public const CODE = "\u{270B}";

    public const NAME = 'raised hand';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-open';

    public const NAME_WITH_UNDERSCORES = 'raised_hand';

    public const TAGS = 'highfive stop';

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
