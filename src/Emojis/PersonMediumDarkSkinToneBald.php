<?php

namespace Wnx\Emojis\Emojis;

/**
 * PersonMediumDarkSkinToneBald Emoji class.
 *
 * @version v13.1
 *
 **/
class PersonMediumDarkSkinToneBald
{
    public const SYMBOL = "🧑🏾‍🦲";

    public const HEX = "1F9D1 1F3FE 200D 1F9B2";

    public const CODE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F9B2}";

    public const NAME = 'person medium-dark skin tone bald';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person';

    public const NAME_WITH_UNDERSCORES = 'person_medium-dark_skin_tone_bald';

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
