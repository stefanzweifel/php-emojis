<?php

namespace Wnx\Emojis\Emojis;

/**
 * RightwardsHand Emoji class.
 *
 * @version v14.0
 *
 **/
class RightwardsHand
{

    public const SYMBOL = "🫱";

    public const HEX = "1FAF1";

    public const CODE = "\u{1FAF1}";

    public const NAME = 'rightwards hand';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-open';

    public const NAME_WITH_UNDERSCORES = 'rightwards_hand';

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
