<?php

namespace Wnx\Emojis\Emojis;

/**
 * CarouselHorse Emoji class.
 *
 * @version v13.1
 *
 **/
class CarouselHorse {

    public const SYMBOL = "🎠";

    public const HEX = "1F3A0";

    public const CODE = "\u{1F3A0}";

    public const NAME = 'carousel horse';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'place-other';

    public const NAME_WITH_UNDERSCORES = 'carousel_horse';

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
