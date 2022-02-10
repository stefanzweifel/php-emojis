<?php

namespace Wnx\Emojis\Emojis;

/**
 * AnxiousFaceWithSweat Emoji class.
 *
 * @version v14.0
 *
 **/
class AnxiousFaceWithSweat
{

    public const SYMBOL = "😰";

    public const HEX = "1F630";

    public const CODE = "\u{1F630}";

    public const NAME = 'anxious face with sweat';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-concerned';

    public const NAME_WITH_UNDERSCORES = 'anxious_face_with_sweat';

    public const TAGS = 'nervous';

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
