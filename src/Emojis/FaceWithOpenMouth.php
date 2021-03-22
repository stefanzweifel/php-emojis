<?php

namespace Wnx\Emojis\Emojis;

/**
 * FaceWithOpenMouth Emoji class.
 *
 * @version v13.1
 *
 **/
class FaceWithOpenMouth
{
    public const SYMBOL = "😮";

    public const HEX = "1F62E";

    public const CODE = "\u{1F62E}";

    public const NAME = 'face with open mouth';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-concerned';

    public const NAME_WITH_UNDERSCORES = 'face_with_open_mouth';

    public const TAGS = 'surprise impressed wow';

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
