<?php

namespace Wnx\Emojis\Emojis;

/**
 * Leopard Emoji class.
 *
 * @version v13.1
 *
 **/
class Leopard {

    public const SYMBOL = "🐆";

    public const HEX = "1F406";

    public const CODE = "\u{1F406}";

    public const NAME = 'leopard';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'animal-mammal';

    public const NAME_WITH_UNDERSCORES = 'leopard';

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
