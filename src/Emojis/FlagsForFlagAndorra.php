<?php

namespace Wnx\Emojis\Emojis;

/**
 * FlagsForFlagAndorra Emoji class.
 *
 * @version v13.1
 *
 **/
class FlagsForFlagAndorra
{
    public const SYMBOL = "🇦🇩";

    public const HEX = "1F1E6 1F1E9";

    public const CODE = "\u{1F1E6}\u{1F1E9}";

    public const NAME = 'flags for flag Andorra';

    public const GROUP = 'Flags';

    public const SUBGROUP = 'country-flag';

    public const NAME_WITH_UNDERSCORES = 'flags_for_flag_Andorra';

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
