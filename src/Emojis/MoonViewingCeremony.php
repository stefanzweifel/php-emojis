<?php

namespace Wnx\Emojis\Emojis;

/**
 * MoonViewingCeremony Emoji class.
 *
 * @version v13.1
 *
 **/
class MoonViewingCeremony {

    public const SYMBOL = "🎑";

    public const HEX = "1F391";

    public const CODE = "\u{1F391}";

    public const NAME = 'moon viewing ceremony';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'event';

    public const NAME_WITH_UNDERSCORES = 'moon_viewing_ceremony';

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
