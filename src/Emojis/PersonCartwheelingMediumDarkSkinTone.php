<?php

namespace Wnx\Emojis\Emojis;

/**
 * PersonCartwheelingMediumDarkSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class PersonCartwheelingMediumDarkSkinTone
{

    public const SYMBOL = "🤸🏾";

    public const HEX = "1F938 1F3FE";

    public const CODE = "\u{1F938}\u{1F3FE}";

    public const NAME = 'person cartwheeling medium-dark skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-sport';

    public const NAME_WITH_UNDERSCORES = 'person_cartwheeling_medium-dark_skin_tone';

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
