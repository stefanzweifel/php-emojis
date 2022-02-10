<?php

namespace Wnx\Emojis\Emojis;

/**
 * FlowerPlayingCards Emoji class.
 *
 * @version v14.0
 *
 **/
class FlowerPlayingCards
{

    public const SYMBOL = "🎴";

    public const HEX = "1F3B4";

    public const CODE = "\u{1F3B4}";

    public const NAME = 'flower playing cards';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'game';

    public const NAME_WITH_UNDERSCORES = 'flower_playing_cards';

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
