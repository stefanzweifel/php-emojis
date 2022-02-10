<?php

namespace Wnx\Emojis\Emojis;

/**
 * ManCookMediumSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class ManCookMediumSkinTone
{

    public const SYMBOL = "👨🏽‍🍳";

    public const HEX = "1F468 1F3FD 200D 1F373";

    public const CODE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F373}";

    public const NAME = 'man cook medium skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'man_cook_medium_skin_tone';

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
