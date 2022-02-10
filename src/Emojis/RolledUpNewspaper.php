<?php

namespace Wnx\Emojis\Emojis;

/**
 * RolledUpNewspaper Emoji class.
 *
 * @version v14.0
 *
 **/
class RolledUpNewspaper
{

    public const SYMBOL = "🗞️";

    public const HEX = "1F5DE FE0F";

    public const CODE = "\u{1F5DE}\u{FE0F}";

    public const NAME = 'rolled-up newspaper';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'book-paper';

    public const NAME_WITH_UNDERSCORES = 'rolled-up_newspaper';

    public const TAGS = 'press';

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
