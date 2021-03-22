<?php

namespace Wnx\Emojis\Emojis;

/**
 * PersonRunningDarkSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class PersonRunningDarkSkinTone {

    public const SYMBOL = "🏃🏿";

    public const HEX = "1F3C3 1F3FF";

    public const CODE = "\u{1F3C3}\u{1F3FF}";

    public const NAME = 'person running dark skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-activity';

    public const NAME_WITH_UNDERSCORES = 'person_running_dark_skin_tone';

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
