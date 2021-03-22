<?php

namespace Wnx\Emojis\Emojis;

/**
 * PlayButton Emoji class.
 *
 * @version v13.1
 *
 **/
class PlayButton {

    public const SYMBOL = "▶️";

    public const HEX = "25B6 FE0F";

    public const CODE = "\u{25B6}\u{FE0F}";

    public const NAME = 'play button';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'av-symbol';

    public const NAME_WITH_UNDERSCORES = 'play_button';

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
