<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanGesturingNo Emoji class.
 *
 * @version v13.1
 *
 **/
class WomanGesturingNo {

    public const SYMBOL = "🙅‍♀️";

    public const HEX = "1F645 200D 2640 FE0F";

    public const CODE = "\u{1F645}\u{200D}\u{2640}\u{FE0F}";

    public const NAME = 'woman gesturing NO';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-gesture';

    public const NAME_WITH_UNDERSCORES = 'woman_gesturing_NO';

    public const TAGS = 'stop halt denied';

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
