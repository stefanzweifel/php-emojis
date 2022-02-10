<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanSwimmingMediumDarkSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class WomanSwimmingMediumDarkSkinTone
{

    public const SYMBOL = "🏊🏾‍♀️";

    public const HEX = "1F3CA 1F3FE 200D 2640 FE0F";

    public const CODE = "\u{1F3CA}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";

    public const NAME = 'woman swimming medium-dark skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-sport';

    public const NAME_WITH_UNDERSCORES = 'woman_swimming_medium-dark_skin_tone';

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
