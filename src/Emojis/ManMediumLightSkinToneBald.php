<?php

namespace Wnx\Emojis\Emojis;

/**
 * ManMediumLightSkinToneBald Emoji class.
 *
 * @version v13.1
 *
 **/
class ManMediumLightSkinToneBald
{
    public const SYMBOL = "👨🏼‍🦲";

    public const HEX = "1F468 1F3FC 200D 1F9B2";

    public const CODE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F9B2}";

    public const NAME = 'man medium-light skin tone bald';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person';

    public const NAME_WITH_UNDERSCORES = 'man_medium-light_skin_tone_bald';

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
