<?php

namespace Wnx\Emojis\Emojis;

/**
 * RaisingHands Emoji class.
 *
 * @version v14.0
 *
 **/
class RaisingHands
{

    public const SYMBOL = "🙌";

    public const HEX = "1F64C";

    public const CODE = "\u{1F64C}";

    public const NAME = 'raising hands';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hands';

    public const NAME_WITH_UNDERSCORES = 'raising_hands';

    public const TAGS = 'hooray';

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
