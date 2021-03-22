<?php

namespace Wnx\Emojis\Emojis;

/**
 * FlagsForFlagUnitedKingdom Emoji class.
 *
 * @version v13.1
 *
 **/
class FlagsForFlagUnitedKingdom
{
    public const SYMBOL = "🇬🇧";

    public const HEX = "1F1EC 1F1E7";

    public const CODE = "\u{1F1EC}\u{1F1E7}";

    public const NAME = 'flags for flag United Kingdom';

    public const GROUP = 'Flags';

    public const SUBGROUP = 'country-flag';

    public const NAME_WITH_UNDERSCORES = 'flags_for_flag_United_Kingdom';

    public const TAGS = 'flag british';

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
