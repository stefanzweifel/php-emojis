<?php

namespace Wnx\Emojis\Emojis;

/**
 * PeopleWithBunnyEars Emoji class.
 *
 * @version v13.1
 *
 **/
class PeopleWithBunnyEars {

    public const SYMBOL = "👯";

    public const HEX = "1F46F";

    public const CODE = "\u{1F46F}";

    public const NAME = 'people with bunny ears';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-activity';

    public const NAME_WITH_UNDERSCORES = 'people_with_bunny_ears';

    public const TAGS = 'bunny';

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
