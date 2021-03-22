<?php

namespace Wnx\Emojis\Emojis;

/**
 * PrayerBeads Emoji class.
 *
 * @version v13.1
 *
 **/
class PrayerBeads {

    public const SYMBOL = "📿";

    public const HEX = "1F4FF";

    public const CODE = "\u{1F4FF}";

    public const NAME = 'prayer beads';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'clothing';

    public const NAME_WITH_UNDERSCORES = 'prayer_beads';

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
