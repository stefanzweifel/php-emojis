<?php

namespace Wnx\Emojis\Emojis;

/**
 * SlotMachine Emoji class.
 *
 * @version v14.0
 *
 **/
class SlotMachine
{

    public const SYMBOL = "🎰";

    public const HEX = "1F3B0";

    public const CODE = "\u{1F3B0}";

    public const NAME = 'slot machine';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'game';

    public const NAME_WITH_UNDERSCORES = 'slot_machine';

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
