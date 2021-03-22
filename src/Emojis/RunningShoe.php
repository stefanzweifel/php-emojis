<?php

namespace Wnx\Emojis\Emojis;

/**
 * RunningShoe Emoji class.
 *
 * @version v13.1
 *
 **/
class RunningShoe {

    public const SYMBOL = "👟";

    public const HEX = "1F45F";

    public const CODE = "\u{1F45F}";

    public const NAME = 'running shoe';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'clothing';

    public const NAME_WITH_UNDERSCORES = 'running_shoe';

    public const TAGS = 'sneaker sport running';

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