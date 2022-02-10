<?php

namespace Wnx\Emojis\Emojis;

/**
 * VictoryHand Emoji class.
 *
 * @version v14.0
 *
 **/
class VictoryHand
{

    public const SYMBOL = "✌️";

    public const HEX = "270C FE0F";

    public const CODE = "\u{270C}\u{FE0F}";

    public const NAME = 'victory hand';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-partial';

    public const NAME_WITH_UNDERSCORES = 'victory_hand';

    public const TAGS = 'victory peace';

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
