<?php

namespace Wnx\Emojis\Emojis;

/**
 * HandWithFingersSplayed Emoji class.
 *
 * @version v14.0
 *
 **/
class HandWithFingersSplayed
{

    public const SYMBOL = "🖐️";

    public const HEX = "1F590 FE0F";

    public const CODE = "\u{1F590}\u{FE0F}";

    public const NAME = 'hand with fingers splayed';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-open';

    public const NAME_WITH_UNDERSCORES = 'hand_with_fingers_splayed';

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
