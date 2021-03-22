<?php

namespace Wnx\Emojis\Emojis;

/**
 * SpiralNotepad Emoji class.
 *
 * @version v13.1
 *
 **/
class SpiralNotepad {

    public const SYMBOL = "🗒️";

    public const HEX = "1F5D2 FE0F";

    public const CODE = "\u{1F5D2}\u{FE0F}";

    public const NAME = 'spiral notepad';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'office';

    public const NAME_WITH_UNDERSCORES = 'spiral_notepad';

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
