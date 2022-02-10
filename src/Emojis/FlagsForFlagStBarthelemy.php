<?php

namespace Wnx\Emojis\Emojis;

/**
 * FlagsForFlagStBarthelemy Emoji class.
 *
 * @version v14.0
 *
 **/
class FlagsForFlagStBarthelemy
{

    public const SYMBOL = "🇧🇱";

    public const HEX = "1F1E7 1F1F1";

    public const CODE = "\u{1F1E7}\u{1F1F1}";

    public const NAME = 'flags for flag St. Barthelemy';

    public const GROUP = 'Flags';

    public const SUBGROUP = 'country-flag';

    public const NAME_WITH_UNDERSCORES = 'flags_for_flag_St._Barthelemy';

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
