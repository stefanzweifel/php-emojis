<?php

namespace Wnx\Emojis\Emojis;

/**
 * ManGettingHaircut Emoji class.
 *
 * @version v13.1
 *
 **/
class ManGettingHaircut
{
    public const SYMBOL = "💇‍♂️";

    public const HEX = "1F487 200D 2642 FE0F";

    public const CODE = "\u{1F487}\u{200D}\u{2642}\u{FE0F}";

    public const NAME = 'man getting haircut';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-activity';

    public const NAME_WITH_UNDERSCORES = 'man_getting_haircut';

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
