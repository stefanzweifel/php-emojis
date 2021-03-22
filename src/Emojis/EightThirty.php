<?php

namespace Wnx\Emojis\Emojis;

/**
 * EightThirty Emoji class.
 *
 * @version v13.1
 *
 **/
class EightThirty {

    public const SYMBOL = "🕣";

    public const HEX = "1F563";

    public const CODE = "\u{1F563}";

    public const NAME = 'eight-thirty';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'time';

    public const NAME_WITH_UNDERSCORES = 'eight-thirty';

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
