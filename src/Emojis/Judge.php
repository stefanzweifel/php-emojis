<?php

namespace Wnx\Emojis\Emojis;

/**
 * Judge Emoji class.
 *
 * @version v13.1
 *
 **/
class Judge
{
    public const SYMBOL = "🧑‍⚖️";

    public const HEX = "1F9D1 200D 2696 FE0F";

    public const CODE = "\u{1F9D1}\u{200D}\u{2696}\u{FE0F}";

    public const NAME = 'judge';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'judge';

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
