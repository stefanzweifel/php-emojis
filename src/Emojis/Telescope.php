<?php

namespace Wnx\Emojis\Emojis;

/**
 * Telescope Emoji class.
 *
 * @version v14.0
 *
 **/
class Telescope
{

    public const SYMBOL = "🔭";

    public const HEX = "1F52D";

    public const CODE = "\u{1F52D}";

    public const NAME = 'telescope';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'science';

    public const NAME_WITH_UNDERSCORES = 'telescope';

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
