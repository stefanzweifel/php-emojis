<?php

namespace Wnx\Emojis\Emojis;

/**
 * ThumbsUpMediumSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class ThumbsUpMediumSkinTone
{
    public const SYMBOL = "👍🏽";

    public const HEX = "1F44D 1F3FD";

    public const CODE = "\u{1F44D}\u{1F3FD}";

    public const NAME = 'thumbs up medium skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-closed';

    public const NAME_WITH_UNDERSCORES = 'thumbs_up_medium_skin_tone';

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
