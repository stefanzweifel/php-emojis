<?php

namespace Wnx\Emojis\Emojis;

/**
 * Coral Emoji class.
 *
 * @version v14.0
 *
 **/
class Coral
{

    public const SYMBOL = "🪸";

    public const HEX = "1FAB8";

    public const CODE = "\u{1FAB8}";

    public const NAME = 'coral';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'animal-marine';

    public const NAME_WITH_UNDERSCORES = 'coral';

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
