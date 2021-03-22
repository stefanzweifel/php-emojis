<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanDancingMediumLightSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class WomanDancingMediumLightSkinTone
{
    public const SYMBOL = "💃🏼";

    public const HEX = "1F483 1F3FC";

    public const CODE = "\u{1F483}\u{1F3FC}";

    public const NAME = 'woman dancing medium-light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-activity';

    public const NAME_WITH_UNDERSCORES = 'woman_dancing_medium-light_skin_tone';

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
