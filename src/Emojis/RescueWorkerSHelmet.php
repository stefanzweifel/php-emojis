<?php

namespace Wnx\Emojis\Emojis;

/**
 * RescueWorkerSHelmet Emoji class.
 *
 * @version v13.1
 *
 **/
class RescueWorkerSHelmet
{
    public const SYMBOL = "⛑️";

    public const HEX = "26D1 FE0F";

    public const CODE = "\u{26D1}\u{FE0F}";

    public const NAME = 'rescue worker’s helmet';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'clothing';

    public const NAME_WITH_UNDERSCORES = 'rescue_worker’s_helmet';

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
