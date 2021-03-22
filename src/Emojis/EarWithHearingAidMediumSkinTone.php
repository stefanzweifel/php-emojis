<?php

namespace Wnx\Emojis\Emojis;

/**
 * EarWithHearingAidMediumSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class EarWithHearingAidMediumSkinTone
{
    public const SYMBOL = "🦻🏽";

    public const HEX = "1F9BB 1F3FD";

    public const CODE = "\u{1F9BB}\u{1F3FD}";

    public const NAME = 'ear with hearing aid medium skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'body-parts';

    public const NAME_WITH_UNDERSCORES = 'ear_with_hearing_aid_medium_skin_tone';

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
