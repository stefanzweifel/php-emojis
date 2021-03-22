<?php

namespace Wnx\Emojis\Emojis;

/**
 * RollingOnTheFloorLaughing Emoji class.
 *
 * @version v13.1
 *
 **/
class RollingOnTheFloorLaughing
{
    public const SYMBOL = "🤣";

    public const HEX = "1F923";

    public const CODE = "\u{1F923}";

    public const NAME = 'rolling on the floor laughing';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-smiling';

    public const NAME_WITH_UNDERSCORES = 'rolling_on_the_floor_laughing';

    public const TAGS = 'lol laughing';

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
