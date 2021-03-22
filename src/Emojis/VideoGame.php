<?php

namespace Wnx\Emojis\Emojis;

/**
 * VideoGame Emoji class.
 *
 * @version v13.1
 *
 **/
class VideoGame
{
    public const SYMBOL = "🎮";

    public const HEX = "1F3AE";

    public const CODE = "\u{1F3AE}";

    public const NAME = 'video game';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'game';

    public const NAME_WITH_UNDERSCORES = 'video_game';

    public const TAGS = 'play controller console';

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
