<?php

namespace Wnx\Emojis\Emojis;

/**
 * RedPaperLantern Emoji class.
 *
 * @version v14.0
 *
 **/
class RedPaperLantern
{

    public const SYMBOL = "🏮";

    public const HEX = "1F3EE";

    public const CODE = "\u{1F3EE}";

    public const NAME = 'red paper lantern';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'light & video';

    public const NAME_WITH_UNDERSCORES = 'red_paper_lantern';

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
