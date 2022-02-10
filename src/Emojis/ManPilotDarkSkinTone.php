<?php

namespace Wnx\Emojis\Emojis;

/**
 * ManPilotDarkSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class ManPilotDarkSkinTone
{

    public const SYMBOL = "👨🏿‍✈️";

    public const HEX = "1F468 1F3FF 200D 2708 FE0F";

    public const CODE = "\u{1F468}\u{1F3FF}\u{200D}\u{2708}\u{FE0F}";

    public const NAME = 'man pilot dark skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'man_pilot_dark_skin_tone';

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
