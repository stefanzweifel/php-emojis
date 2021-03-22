<?php

namespace Wnx\Emojis\Emojis;

/**
 * PersonWearingTurban Emoji class.
 *
 * @version v13.1
 *
 **/
class PersonWearingTurban
{
    public const SYMBOL = "👳";

    public const HEX = "1F473";

    public const CODE = "\u{1F473}";

    public const NAME = 'person wearing turban';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'person_wearing_turban';

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
