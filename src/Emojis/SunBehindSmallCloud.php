<?php

namespace Wnx\Emojis\Emojis;

/**
 * SunBehindSmallCloud Emoji class.
 *
 * @version v13.1
 *
 **/
class SunBehindSmallCloud {

    public const SYMBOL = "🌤️";

    public const HEX = "1F324 FE0F";

    public const CODE = "\u{1F324}\u{FE0F}";

    public const NAME = 'sun behind small cloud';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'sky & weather';

    public const NAME_WITH_UNDERSCORES = 'sun_behind_small_cloud';

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
