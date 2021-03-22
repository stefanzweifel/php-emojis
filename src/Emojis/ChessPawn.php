<?php

namespace Wnx\Emojis\Emojis;

/**
 * ChessPawn Emoji class.
 *
 * @version v13.1
 *
 **/
class ChessPawn {

    public const SYMBOL = "♟️";

    public const HEX = "265F FE0F";

    public const CODE = "\u{265F}\u{FE0F}";

    public const NAME = 'chess pawn';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'game';

    public const NAME_WITH_UNDERSCORES = 'chess_pawn';

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
