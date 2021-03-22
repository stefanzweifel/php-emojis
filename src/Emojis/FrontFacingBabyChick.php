<?php

namespace Wnx\Emojis\Emojis;

/**
 * FrontFacingBabyChick Emoji class.
 *
 * @version v13.1
 *
 **/
class FrontFacingBabyChick
{
    public const SYMBOL = "🐥";

    public const HEX = "1F425";

    public const CODE = "\u{1F425}";

    public const NAME = 'front-facing baby chick';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'animal-bird';

    public const NAME_WITH_UNDERSCORES = 'front-facing_baby_chick';

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
