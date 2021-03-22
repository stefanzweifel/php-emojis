<?php

namespace Wnx\Emojis\Emojis;

/**
 * SpiralShell Emoji class.
 *
 * @version v13.1
 *
 **/
class SpiralShell {

    public const SYMBOL = "🐚";

    public const HEX = "1F41A";

    public const CODE = "\u{1F41A}";

    public const NAME = 'spiral shell';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'animal-marine';

    public const NAME_WITH_UNDERSCORES = 'spiral_shell';

    public const TAGS = 'sea beach';

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
