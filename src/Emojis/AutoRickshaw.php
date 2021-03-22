<?php

namespace Wnx\Emojis\Emojis;

/**
 * AutoRickshaw Emoji class.
 *
 * @version v13.1
 *
 **/
class AutoRickshaw {

    public const SYMBOL = "🛺";

    public const HEX = "1F6FA";

    public const CODE = "\u{1F6FA}";

    public const NAME = 'auto rickshaw';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'transport-ground';

    public const NAME_WITH_UNDERSCORES = 'auto_rickshaw';

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