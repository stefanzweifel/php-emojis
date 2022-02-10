<?php

namespace Wnx\Emojis\Emojis;

/**
 * TransgenderFlag Emoji class.
 *
 * @version v14.0
 *
 **/
class TransgenderFlag
{

    public const SYMBOL = "🏳️‍⚧️";

    public const HEX = "1F3F3 FE0F 200D 26A7 FE0F";

    public const CODE = "\u{1F3F3}\u{FE0F}\u{200D}\u{26A7}\u{FE0F}";

    public const NAME = 'transgender flag';

    public const GROUP = 'Flags';

    public const SUBGROUP = 'flag';

    public const NAME_WITH_UNDERSCORES = 'transgender_flag';

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
