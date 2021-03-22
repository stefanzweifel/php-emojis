<?php

namespace Wnx\Emojis\Emojis;

/**
 * EarWithHearingAidMediumDarkSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class EarWithHearingAidMediumDarkSkinTone
{
    public const SYMBOL = "🦻🏾";

    public const HEX = "1F9BB 1F3FE";

    public const CODE = "\u{1F9BB}\u{1F3FE}";

    public const NAME = 'ear with hearing aid medium-dark skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'body-parts';

    public const NAME_WITH_UNDERSCORES = 'ear_with_hearing_aid_medium-dark_skin_tone';

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
