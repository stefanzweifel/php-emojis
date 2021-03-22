<?php

namespace Wnx\Emojis\Emojis;

/**
 * Comet Emoji class.
 *
 * @version v13.1
 *
 **/
class Comet
{
    public const SYMBOL = "☄️";

    public const HEX = "2604 FE0F";

    public const CODE = "\u{2604}\u{FE0F}";

    public const NAME = 'comet';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'sky & weather';

    public const NAME_WITH_UNDERSCORES = 'comet';

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
