<?php

namespace Wnx\Emojis\Emojis;

/**
 * HeartOnFire Emoji class.
 *
 * @version v13.1
 *
 **/
class HeartOnFire {

    public const SYMBOL = "❤️‍🔥";

    public const HEX = "2764 FE0F 200D 1F525";

    public const CODE = "\u{2764}\u{FE0F}\u{200D}\u{1F525}";

    public const NAME = 'heart on fire';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'emotion';

    public const NAME_WITH_UNDERSCORES = 'heart_on_fire';

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
