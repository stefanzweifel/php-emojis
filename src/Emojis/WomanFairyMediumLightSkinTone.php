<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanFairyMediumLightSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class WomanFairyMediumLightSkinTone {

    public const SYMBOL = "🧚🏼‍♀️";

    public const HEX = "1F9DA 1F3FC 200D 2640 FE0F";

    public const CODE = "\u{1F9DA}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";

    public const NAME = 'woman fairy medium-light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-fantasy';

    public const NAME_WITH_UNDERSCORES = 'woman_fairy_medium-light_skin_tone';

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