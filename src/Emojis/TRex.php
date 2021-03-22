<?php

namespace Wnx\Emojis\Emojis;

/**
 * TRex Emoji class.
 *
 * @version v13.1
 *
 **/
class TRex {

    public const SYMBOL = "🦖";

    public const HEX = "1F996";

    public const CODE = "\u{1F996}";

    public const NAME = 'T-Rex';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'animal-reptile';

    public const NAME_WITH_UNDERSCORES = 'T-Rex';

    public const TAGS = 'dinosaur';

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