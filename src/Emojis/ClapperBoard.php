<?php

namespace Wnx\Emojis\Emojis;

/**
 * ClapperBoard Emoji class.
 *
 * @version v13.1
 *
 **/
class ClapperBoard
{
    public const SYMBOL = "🎬";

    public const HEX = "1F3AC";

    public const CODE = "\u{1F3AC}";

    public const NAME = 'clapper board';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'light & video';

    public const NAME_WITH_UNDERSCORES = 'clapper_board';

    public const TAGS = 'film';

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
