<?php

namespace Wnx\Emojis\Emojis;

/**
 * FlagsForFlagUruguay Emoji class.
 *
 * @version v13.1
 *
 **/
class FlagsForFlagUruguay {

    public const SYMBOL = "🇺🇾";

    public const HEX = "1F1FA 1F1FE";

    public const CODE = "\u{1F1FA}\u{1F1FE}";

    public const NAME = 'flags for flag Uruguay';

    public const GROUP = 'Flags';

    public const SUBGROUP = 'country-flag';

    public const NAME_WITH_UNDERSCORES = 'flags_for_flag_Uruguay';

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