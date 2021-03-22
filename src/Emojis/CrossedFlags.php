<?php

namespace Wnx\Emojis\Emojis;

/**
 * CrossedFlags Emoji class.
 *
 * @version v13.1
 *
 **/
class CrossedFlags {

    public const SYMBOL = "🎌";

    public const HEX = "1F38C";

    public const CODE = "\u{1F38C}";

    public const NAME = 'crossed flags';

    public const GROUP = 'Flags';

    public const SUBGROUP = 'flag';

    public const NAME_WITH_UNDERSCORES = 'crossed_flags';

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
