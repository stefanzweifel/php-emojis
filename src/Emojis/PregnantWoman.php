<?php

namespace Wnx\Emojis\Emojis;

/**
 * PregnantWoman Emoji class.
 *
 * @version v13.1
 *
 **/
class PregnantWoman
{
    public const SYMBOL = "🤰";

    public const HEX = "1F930";

    public const CODE = "\u{1F930}";

    public const NAME = 'pregnant woman';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'pregnant_woman';

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
