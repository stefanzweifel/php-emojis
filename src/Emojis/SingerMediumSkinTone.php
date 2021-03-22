<?php

namespace Wnx\Emojis\Emojis;

/**
 * SingerMediumSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class SingerMediumSkinTone {

    public const SYMBOL = "🧑🏽‍🎤";

    public const HEX = "1F9D1 1F3FD 200D 1F3A4";

    public const CODE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F3A4}";

    public const NAME = 'singer medium skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'singer_medium_skin_tone';

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
