<?php

namespace Wnx\Emojis\Emojis;

/**
 * SoccerBall Emoji class.
 *
 * @version v13.1
 *
 **/
class SoccerBall {

    public const SYMBOL = "⚽";

    public const HEX = "26BD";

    public const CODE = "\u{26BD}";

    public const NAME = 'soccer ball';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'sport';

    public const NAME_WITH_UNDERSCORES = 'soccer_ball';

    public const TAGS = 'sports';

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
