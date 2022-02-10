<?php

namespace Wnx\Emojis\Emojis;

/**
 * FilmProjector Emoji class.
 *
 * @version v14.0
 *
 **/
class FilmProjector
{

    public const SYMBOL = "📽️";

    public const HEX = "1F4FD FE0F";

    public const CODE = "\u{1F4FD}\u{FE0F}";

    public const NAME = 'film projector';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'light & video';

    public const NAME_WITH_UNDERSCORES = 'film_projector';

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
