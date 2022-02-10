<?php

namespace Wnx\Emojis\Emojis;

/**
 * Scissors Emoji class.
 *
 * @version v14.0
 *
 **/
class Scissors
{

    public const SYMBOL = "✂️";

    public const HEX = "2702 FE0F";

    public const CODE = "\u{2702}\u{FE0F}";

    public const NAME = 'scissors';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'office';

    public const NAME_WITH_UNDERSCORES = 'scissors';

    public const TAGS = 'cut';

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
