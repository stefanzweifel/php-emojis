<?php

namespace Wnx\Emojis\Emojis;

/**
 * BellWithSlash Emoji class.
 *
 * @version v14.0
 *
 **/
class BellWithSlash
{

    public const SYMBOL = "🔕";

    public const HEX = "1F515";

    public const CODE = "\u{1F515}";

    public const NAME = 'bell with slash';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'sound';

    public const NAME_WITH_UNDERSCORES = 'bell_with_slash';

    public const TAGS = 'volume off';

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
