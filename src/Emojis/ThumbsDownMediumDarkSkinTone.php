<?php

namespace Wnx\Emojis\Emojis;

/**
 * ThumbsDownMediumDarkSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class ThumbsDownMediumDarkSkinTone
{

    public const SYMBOL = "👎🏾";

    public const HEX = "1F44E 1F3FE";

    public const CODE = "\u{1F44E}\u{1F3FE}";

    public const NAME = 'thumbs down medium-dark skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-closed';

    public const NAME_WITH_UNDERSCORES = 'thumbs_down_medium-dark_skin_tone';

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
