<?php

namespace Wnx\Emojis\Emojis;

/**
 * FramedPicture Emoji class.
 *
 * @version v13.1
 *
 **/
class FramedPicture {

    public const SYMBOL = "🖼️";

    public const HEX = "1F5BC FE0F";

    public const CODE = "\u{1F5BC}\u{FE0F}";

    public const NAME = 'framed picture';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'arts & crafts';

    public const NAME_WITH_UNDERSCORES = 'framed_picture';

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
