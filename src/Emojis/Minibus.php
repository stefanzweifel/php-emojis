<?php

namespace Wnx\Emojis\Emojis;

/**
 * Minibus Emoji class.
 *
 * @version v13.1
 *
 **/
class Minibus
{
    public const SYMBOL = "🚐";

    public const HEX = "1F690";

    public const CODE = "\u{1F690}";

    public const NAME = 'minibus';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'transport-ground';

    public const NAME_WITH_UNDERSCORES = 'minibus';

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
