<?php

namespace Wnx\Emojis\Emojis;

/**
 * ManInLotusPosition Emoji class.
 *
 * @version v13.1
 *
 **/
class ManInLotusPosition {

    public const SYMBOL = "🧘‍♂️";

    public const HEX = "1F9D8 200D 2642 FE0F";

    public const CODE = "\u{1F9D8}\u{200D}\u{2642}\u{FE0F}";

    public const NAME = 'man in lotus position';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-resting';

    public const NAME_WITH_UNDERSCORES = 'man_in_lotus_position';

    public const TAGS = 'meditation';

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
