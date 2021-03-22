<?php

namespace Wnx\Emojis\Emojis;

/**
 * CityscapeAtDusk Emoji class.
 *
 * @version v13.1
 *
 **/
class CityscapeAtDusk {

    public const SYMBOL = "🌆";

    public const HEX = "1F306";

    public const CODE = "\u{1F306}";

    public const NAME = 'cityscape at dusk';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'place-other';

    public const NAME_WITH_UNDERSCORES = 'cityscape_at_dusk';

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
