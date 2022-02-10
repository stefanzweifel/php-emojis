<?php

namespace Wnx\Emojis\Emojis;

/**
 * Headphone Emoji class.
 *
 * @version v14.0
 *
 **/
class Headphone
{

    public const SYMBOL = "🎧";

    public const HEX = "1F3A7";

    public const CODE = "\u{1F3A7}";

    public const NAME = 'headphone';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'music';

    public const NAME_WITH_UNDERSCORES = 'headphone';

    public const TAGS = 'music earphones';

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
