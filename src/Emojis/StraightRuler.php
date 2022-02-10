<?php

namespace Wnx\Emojis\Emojis;

/**
 * StraightRuler Emoji class.
 *
 * @version v14.0
 *
 **/
class StraightRuler
{

    public const SYMBOL = "📏";

    public const HEX = "1F4CF";

    public const CODE = "\u{1F4CF}";

    public const NAME = 'straight ruler';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'office';

    public const NAME_WITH_UNDERSCORES = 'straight_ruler';

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
