<?php

namespace Wnx\Emojis\Emojis;

/**
 * HammerAndPick Emoji class.
 *
 * @version v13.1
 *
 **/
class HammerAndPick
{
    public const SYMBOL = "⚒️";

    public const HEX = "2692 FE0F";

    public const CODE = "\u{2692}\u{FE0F}";

    public const NAME = 'hammer and pick';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'tool';

    public const NAME_WITH_UNDERSCORES = 'hammer_and_pick';

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
