<?php

namespace Wnx\Emojis\Emojis;

/**
 * GirlMediumDarkSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class GirlMediumDarkSkinTone {

    public const SYMBOL = "👧🏾";

    public const HEX = "1F467 1F3FE";

    public const CODE = "\u{1F467}\u{1F3FE}";

    public const NAME = 'girl medium-dark skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person';

    public const NAME_WITH_UNDERSCORES = 'girl_medium-dark_skin_tone';

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