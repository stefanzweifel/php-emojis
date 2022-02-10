<?php

namespace Wnx\Emojis\Emojis;

/**
 * Coat Emoji class.
 *
 * @version v14.0
 *
 **/
class Coat
{

    public const SYMBOL = "🧥";

    public const HEX = "1F9E5";

    public const CODE = "\u{1F9E5}";

    public const NAME = 'coat';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'clothing';

    public const NAME_WITH_UNDERSCORES = 'coat';

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
