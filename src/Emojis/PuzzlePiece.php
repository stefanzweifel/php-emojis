<?php

namespace Wnx\Emojis\Emojis;

/**
 * PuzzlePiece Emoji class.
 *
 * @version v13.1
 *
 **/
class PuzzlePiece {

    public const SYMBOL = "🧩";

    public const HEX = "1F9E9";

    public const CODE = "\u{1F9E9}";

    public const NAME = 'puzzle piece';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'game';

    public const NAME_WITH_UNDERSCORES = 'puzzle_piece';

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
