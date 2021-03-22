<?php

namespace Wnx\Emojis\Emojis;

/**
 * RollOfPaper Emoji class.
 *
 * @version v13.1
 *
 **/
class RollOfPaper
{
    public const SYMBOL = "🧻";

    public const HEX = "1F9FB";

    public const CODE = "\u{1F9FB}";

    public const NAME = 'roll of paper';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'household';

    public const NAME_WITH_UNDERSCORES = 'roll_of_paper';

    public const TAGS = 'toilet';

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
