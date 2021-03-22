<?php

namespace Wnx\Emojis\Emojis;

/**
 * FlagsForFlagWales Emoji class.
 *
 * @version v13.1
 *
 **/
class FlagsForFlagWales {

    public const SYMBOL = "🏴󠁧󠁢󠁷󠁬󠁳󠁿";

    public const HEX = "1F3F4 E0067 E0062 E0077 E006C E0073 E007F";

    public const CODE = "\u{1F3F4}\u{E0067}\u{E0062}\u{E0077}\u{E006C}\u{E0073}\u{E007F}";

    public const NAME = 'flags for flag Wales';

    public const GROUP = 'Flags';

    public const SUBGROUP = 'subdivision-flag';

    public const NAME_WITH_UNDERSCORES = 'flags_for_flag_Wales';

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
