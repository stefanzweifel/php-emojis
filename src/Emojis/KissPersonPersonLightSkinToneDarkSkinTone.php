<?php

namespace Wnx\Emojis\Emojis;

/**
 * KissPersonPersonLightSkinToneDarkSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class KissPersonPersonLightSkinToneDarkSkinTone
{

    public const SYMBOL = "🧑🏻‍❤️‍💋‍🧑🏿";

    public const HEX = "1F9D1 1F3FB 200D 2764 FE0F 200D 1F48B 200D 1F9D1 1F3FF";

    public const CODE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FF}";

    public const NAME = 'kiss person person light skin tone dark skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'family';

    public const NAME_WITH_UNDERSCORES = 'kiss_person_person_light_skin_tone_dark_skin_tone';

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
