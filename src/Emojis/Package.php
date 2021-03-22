<?php

namespace Wnx\Emojis\Emojis;

/**
 * Package Emoji class.
 *
 * @version v13.1
 *
 **/
class Package {

    public const SYMBOL = "📦";

    public const HEX = "1F4E6";

    public const CODE = "\u{1F4E6}";

    public const NAME = 'package';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'mail';

    public const NAME_WITH_UNDERSCORES = 'package';

    public const TAGS = 'shipping';

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
