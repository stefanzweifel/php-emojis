<?php

namespace Wnx\Emojis\Emojis;

/**
 * Sake Emoji class.
 *
 * @version v14.0
 *
 **/
class Sake
{

    public const SYMBOL = "🍶";

    public const HEX = "1F376";

    public const CODE = "\u{1F376}";

    public const NAME = 'sake';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'drink';

    public const NAME_WITH_UNDERSCORES = 'sake';

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
