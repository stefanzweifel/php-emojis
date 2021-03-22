<?php

namespace Wnx\Emojis\Emojis;

/**
 * OkHand Emoji class.
 *
 * @version v13.1
 *
 **/
class OkHand {

    public const SYMBOL = "👌";

    public const HEX = "1F44C";

    public const CODE = "\u{1F44C}";

    public const NAME = 'OK hand';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-partial';

    public const NAME_WITH_UNDERSCORES = 'OK_hand';

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
