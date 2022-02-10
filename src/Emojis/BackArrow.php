<?php

namespace Wnx\Emojis\Emojis;

/**
 * BackArrow Emoji class.
 *
 * @version v14.0
 *
 **/
class BackArrow
{

    public const SYMBOL = "🔙";

    public const HEX = "1F519";

    public const CODE = "\u{1F519}";

    public const NAME = 'BACK arrow';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'arrow';

    public const NAME_WITH_UNDERSCORES = 'BACK_arrow';

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
