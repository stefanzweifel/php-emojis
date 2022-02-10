<?php

namespace Wnx\Emojis\Emojis;

/**
 * FlagsForFlagScotland Emoji class.
 *
 * @version v14.0
 *
 **/
class FlagsForFlagScotland
{

    public const SYMBOL = "🏴󠁧󠁢󠁳󠁣󠁴󠁿";

    public const HEX = "1F3F4 E0067 E0062 E0073 E0063 E0074 E007F";

    public const CODE = "\u{1F3F4}\u{E0067}\u{E0062}\u{E0073}\u{E0063}\u{E0074}\u{E007F}";

    public const NAME = 'flags for flag Scotland';

    public const GROUP = 'Flags';

    public const SUBGROUP = 'subdivision-flag';

    public const NAME_WITH_UNDERSCORES = 'flags_for_flag_Scotland';

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
