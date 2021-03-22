<?php

namespace Wnx\Emojis\Emojis;

/**
 * RaisedBackOfHand Emoji class.
 *
 * @version v13.1
 *
 **/
class RaisedBackOfHand {

    public const SYMBOL = "🤚";

    public const HEX = "1F91A";

    public const CODE = "\u{1F91A}";

    public const NAME = 'raised back of hand';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-open';

    public const NAME_WITH_UNDERSCORES = 'raised_back_of_hand';

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
