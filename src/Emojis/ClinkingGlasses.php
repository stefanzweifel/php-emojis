<?php

namespace Wnx\Emojis\Emojis;

/**
 * ClinkingGlasses Emoji class.
 *
 * @version v14.0
 *
 **/
class ClinkingGlasses
{

    public const SYMBOL = "🥂";

    public const HEX = "1F942";

    public const CODE = "\u{1F942}";

    public const NAME = 'clinking glasses';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'drink';

    public const NAME_WITH_UNDERSCORES = 'clinking_glasses';

    public const TAGS = 'cheers toast';

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
