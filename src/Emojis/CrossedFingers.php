<?php

namespace Wnx\Emojis\Emojis;

/**
 * CrossedFingers Emoji class.
 *
 * @version v14.0
 *
 **/
class CrossedFingers
{

    public const SYMBOL = "🤞";

    public const HEX = "1F91E";

    public const CODE = "\u{1F91E}";

    public const NAME = 'crossed fingers';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-partial';

    public const NAME_WITH_UNDERSCORES = 'crossed_fingers';

    public const TAGS = 'luck hopeful';

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
