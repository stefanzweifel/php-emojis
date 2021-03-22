<?php

namespace Wnx\Emojis\Emojis;

/**
 * MagnifyingGlassTiltedLeft Emoji class.
 *
 * @version v13.1
 *
 **/
class MagnifyingGlassTiltedLeft {

    public const SYMBOL = "🔍";

    public const HEX = "1F50D";

    public const CODE = "\u{1F50D}";

    public const NAME = 'magnifying glass tilted left';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'light & video';

    public const NAME_WITH_UNDERSCORES = 'magnifying_glass_tilted_left';

    public const TAGS = 'search zoom';

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
