<?php

namespace Wnx\Emojis\Emojis;

/**
 * Guitar Emoji class.
 *
 * @version v13.1
 *
 **/
class Guitar
{
    public const SYMBOL = "🎸";

    public const HEX = "1F3B8";

    public const CODE = "\u{1F3B8}";

    public const NAME = 'guitar';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'musical-instrument';

    public const NAME_WITH_UNDERSCORES = 'guitar';

    public const TAGS = 'rock';

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
