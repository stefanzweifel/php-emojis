<?php

namespace Wnx\Emojis\Emojis;

/**
 * AlienMonster Emoji class.
 *
 * @version v13.1
 *
 **/
class AlienMonster {

    public const SYMBOL = "👾";

    public const HEX = "1F47E";

    public const CODE = "\u{1F47E}";

    public const NAME = 'alien monster';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-costume';

    public const NAME_WITH_UNDERSCORES = 'alien_monster';

    public const TAGS = 'game retro';

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
