<?php

namespace Wnx\Emojis\Emojis;

/**
 * CircusTent Emoji class.
 *
 * @version v13.1
 *
 **/
class CircusTent {

    public const SYMBOL = "🎪";

    public const HEX = "1F3AA";

    public const CODE = "\u{1F3AA}";

    public const NAME = 'circus tent';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'place-other';

    public const NAME_WITH_UNDERSCORES = 'circus_tent';

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