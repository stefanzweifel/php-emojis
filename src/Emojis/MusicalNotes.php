<?php

namespace Wnx\Emojis\Emojis;

/**
 * MusicalNotes Emoji class.
 *
 * @version v13.1
 *
 **/
class MusicalNotes
{
    public const SYMBOL = "🎶";

    public const HEX = "1F3B6";

    public const CODE = "\u{1F3B6}";

    public const NAME = 'musical notes';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'music';

    public const NAME_WITH_UNDERSCORES = 'musical_notes';

    public const TAGS = 'music';

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
