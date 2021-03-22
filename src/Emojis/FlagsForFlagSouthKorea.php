<?php

namespace Wnx\Emojis\Emojis;

/**
 * FlagsForFlagSouthKorea Emoji class.
 *
 * @version v13.1
 *
 **/
class FlagsForFlagSouthKorea
{
    public const SYMBOL = "🇰🇷";

    public const HEX = "1F1F0 1F1F7";

    public const CODE = "\u{1F1F0}\u{1F1F7}";

    public const NAME = 'flags for flag South Korea';

    public const GROUP = 'Flags';

    public const SUBGROUP = 'country-flag';

    public const NAME_WITH_UNDERSCORES = 'flags_for_flag_South_Korea';

    public const TAGS = 'korea';

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
