<?php

namespace Wnx\Emojis\Emojis;

/**
 * RainbowFlag Emoji class.
 *
 * @version v13.1
 *
 **/
class RainbowFlag {

    public const SYMBOL = "🏳️‍🌈";

    public const HEX = "1F3F3 FE0F 200D 1F308";

    public const CODE = "\u{1F3F3}\u{FE0F}\u{200D}\u{1F308}";

    public const NAME = 'rainbow flag';

    public const GROUP = 'Flags';

    public const SUBGROUP = 'flag';

    public const NAME_WITH_UNDERSCORES = 'rainbow_flag';

    public const TAGS = 'pride';

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
