<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanDetectiveDarkSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class WomanDetectiveDarkSkinTone {

    public const SYMBOL = "🕵🏿‍♀️";

    public const HEX = "1F575 1F3FF 200D 2640 FE0F";

    public const CODE = "\u{1F575}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";

    public const NAME = 'woman detective dark skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'woman_detective_dark_skin_tone';

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
