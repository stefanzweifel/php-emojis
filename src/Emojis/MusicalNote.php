<?php

namespace Wnx\Emojis\Emojis;

/**
 * MusicalNote Emoji class.
 *
 * @version v14.0
 *
 **/
class MusicalNote
{

    public const SYMBOL = "🎵";

    public const HEX = "1F3B5";

    public const CODE = "\u{1F3B5}";

    public const NAME = 'musical note';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'music';

    public const NAME_WITH_UNDERSCORES = 'musical_note';

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
