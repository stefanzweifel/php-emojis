<?php

namespace Wnx\Emojis\Emojis;

/**
 * PersonInMotorizedWheelchair Emoji class.
 *
 * @version v13.1
 *
 **/
class PersonInMotorizedWheelchair {

    public const SYMBOL = "🧑‍🦼";

    public const HEX = "1F9D1 200D 1F9BC";

    public const CODE = "\u{1F9D1}\u{200D}\u{1F9BC}";

    public const NAME = 'person in motorized wheelchair';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-activity';

    public const NAME_WITH_UNDERSCORES = 'person_in_motorized_wheelchair';

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
