<?php

namespace Wnx\Emojis\Emojis;

/**
 * GameDie Emoji class.
 *
 * @version v13.1
 *
 **/
class GameDie
{
    public const SYMBOL = "🎲";

    public const HEX = "1F3B2";

    public const CODE = "\u{1F3B2}";

    public const NAME = 'game die';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'game';

    public const NAME_WITH_UNDERSCORES = 'game_die';

    public const TAGS = 'dice gambling';

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
