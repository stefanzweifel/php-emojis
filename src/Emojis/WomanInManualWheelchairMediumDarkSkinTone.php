<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanInManualWheelchairMediumDarkSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class WomanInManualWheelchairMediumDarkSkinTone
{

    public const SYMBOL = "👩🏾‍🦽";

    public const HEX = "1F469 1F3FE 200D 1F9BD";

    public const CODE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F9BD}";

    public const NAME = 'woman in manual wheelchair medium-dark skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-activity';

    public const NAME_WITH_UNDERSCORES = 'woman_in_manual_wheelchair_medium-dark_skin_tone';

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
