<?php

namespace Wnx\Emojis\Emojis;

/**
 * GraduationCap Emoji class.
 *
 * @version v14.0
 *
 **/
class GraduationCap
{

    public const SYMBOL = "🎓";

    public const HEX = "1F393";

    public const CODE = "\u{1F393}";

    public const NAME = 'graduation cap';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'clothing';

    public const NAME_WITH_UNDERSCORES = 'graduation_cap';

    public const TAGS = 'education college university graduation';

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
