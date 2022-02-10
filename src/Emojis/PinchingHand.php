<?php

namespace Wnx\Emojis\Emojis;

/**
 * PinchingHand Emoji class.
 *
 * @version v14.0
 *
 **/
class PinchingHand
{

    public const SYMBOL = "🤏";

    public const HEX = "1F90F";

    public const CODE = "\u{1F90F}";

    public const NAME = 'pinching hand';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-partial';

    public const NAME_WITH_UNDERSCORES = 'pinching_hand';

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
