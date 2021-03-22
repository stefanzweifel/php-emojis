<?php

namespace Wnx\Emojis\Emojis;

/**
 * PersonBowing Emoji class.
 *
 * @version v13.1
 *
 **/
class PersonBowing
{
    public const SYMBOL = "🙇";

    public const HEX = "1F647";

    public const CODE = "\u{1F647}";

    public const NAME = 'person bowing';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-gesture';

    public const NAME_WITH_UNDERSCORES = 'person_bowing';

    public const TAGS = 'respect thanks';

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
