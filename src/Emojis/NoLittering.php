<?php

namespace Wnx\Emojis\Emojis;

/**
 * NoLittering Emoji class.
 *
 * @version v13.1
 *
 **/
class NoLittering {

    public const SYMBOL = "🚯";

    public const HEX = "1F6AF";

    public const CODE = "\u{1F6AF}";

    public const NAME = 'no littering';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'warning';

    public const NAME_WITH_UNDERSCORES = 'no_littering';

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