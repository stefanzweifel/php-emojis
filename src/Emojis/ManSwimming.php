<?php

namespace Wnx\Emojis\Emojis;

/**
 * ManSwimming Emoji class.
 *
 * @version v13.1
 *
 **/
class ManSwimming
{
    public const SYMBOL = "🏊‍♂️";

    public const HEX = "1F3CA 200D 2642 FE0F";

    public const CODE = "\u{1F3CA}\u{200D}\u{2642}\u{FE0F}";

    public const NAME = 'man swimming';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-sport';

    public const NAME_WITH_UNDERSCORES = 'man_swimming';

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
