<?php

namespace Wnx\Emojis\Emojis;

/**
 * PersonGettingMassage Emoji class.
 *
 * @version v13.1
 *
 **/
class PersonGettingMassage
{
    public const SYMBOL = "💆";

    public const HEX = "1F486";

    public const CODE = "\u{1F486}";

    public const NAME = 'person getting massage';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-activity';

    public const NAME_WITH_UNDERSCORES = 'person_getting_massage';

    public const TAGS = 'spa';

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
