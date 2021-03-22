<?php

namespace Wnx\Emojis\Emojis;

/**
 * PersonWithVeil Emoji class.
 *
 * @version v13.1
 *
 **/
class PersonWithVeil
{
    public const SYMBOL = "👰";

    public const HEX = "1F470";

    public const CODE = "\u{1F470}";

    public const NAME = 'person with veil';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'person_with_veil';

    public const TAGS = 'marriage wedding';

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
