<?php

namespace Wnx\Emojis\Emojis;

/**
 * MovieCamera Emoji class.
 *
 * @version v13.1
 *
 **/
class MovieCamera {

    public const SYMBOL = "🎥";

    public const HEX = "1F3A5";

    public const CODE = "\u{1F3A5}";

    public const NAME = 'movie camera';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'light & video';

    public const NAME_WITH_UNDERSCORES = 'movie_camera';

    public const TAGS = 'film video';

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
