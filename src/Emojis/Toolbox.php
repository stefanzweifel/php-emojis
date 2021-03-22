<?php

namespace Wnx\Emojis\Emojis;

/**
 * Toolbox Emoji class.
 *
 * @version v13.1
 *
 **/
class Toolbox {

    public const SYMBOL = "🧰";

    public const HEX = "1F9F0";

    public const CODE = "\u{1F9F0}";

    public const NAME = 'toolbox';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'tool';

    public const NAME_WITH_UNDERSCORES = 'toolbox';

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