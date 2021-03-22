<?php

namespace Wnx\Emojis\Emojis;

/**
 * PersonGettingHaircut Emoji class.
 *
 * @version v13.1
 *
 **/
class PersonGettingHaircut {

    public const SYMBOL = "💇";

    public const HEX = "1F487";

    public const CODE = "\u{1F487}";

    public const NAME = 'person getting haircut';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-activity';

    public const NAME_WITH_UNDERSCORES = 'person_getting_haircut';

    public const TAGS = 'beauty';

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
