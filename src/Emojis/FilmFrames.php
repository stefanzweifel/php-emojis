<?php

namespace Wnx\Emojis\Emojis;

/**
 * FilmFrames Emoji class.
 *
 * @version v13.1
 *
 **/
class FilmFrames {

    public const SYMBOL = "🎞️";

    public const HEX = "1F39E FE0F";

    public const CODE = "\u{1F39E}\u{FE0F}";

    public const NAME = 'film frames';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'light & video';

    public const NAME_WITH_UNDERSCORES = 'film_frames';

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
