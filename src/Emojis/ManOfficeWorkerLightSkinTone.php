<?php

namespace Wnx\Emojis\Emojis;

/**
 * ManOfficeWorkerLightSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class ManOfficeWorkerLightSkinTone
{
    public const SYMBOL = "👨🏻‍💼";

    public const HEX = "1F468 1F3FB 200D 1F4BC";

    public const CODE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F4BC}";

    public const NAME = 'man office worker light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'man_office_worker_light_skin_tone';

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
