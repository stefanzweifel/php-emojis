<?php

namespace Wnx\Emojis\Emojis;

/**
 * FortuneCookie Emoji class.
 *
 * @version v13.1
 *
 **/
class FortuneCookie
{
    public const SYMBOL = "🥠";

    public const HEX = "1F960";

    public const CODE = "\u{1F960}";

    public const NAME = 'fortune cookie';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'food-asian';

    public const NAME_WITH_UNDERSCORES = 'fortune_cookie';

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
