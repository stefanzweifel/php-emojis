<?php

namespace Wnx\Emojis\Emojis;

/**
 * PersonWithWhiteCaneLightSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class PersonWithWhiteCaneLightSkinTone {

    public const SYMBOL = "🧑🏻‍🦯";

    public const HEX = "1F9D1 1F3FB 200D 1F9AF";

    public const CODE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F9AF}";

    public const NAME = 'person with white cane light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-activity';

    public const NAME_WITH_UNDERSCORES = 'person_with_white_cane_light_skin_tone';

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
