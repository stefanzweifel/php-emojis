<?php

namespace Wnx\Emojis\Emojis;

/**
 * SewingNeedle Emoji class.
 *
 * @version v13.1
 *
 **/
class SewingNeedle {

    public const SYMBOL = "🪡";

    public const HEX = "1FAA1";

    public const CODE = "\u{1FAA1}";

    public const NAME = 'sewing needle';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'arts & crafts';

    public const NAME_WITH_UNDERSCORES = 'sewing_needle';

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