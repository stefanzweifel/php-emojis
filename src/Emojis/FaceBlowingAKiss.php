<?php

namespace Wnx\Emojis\Emojis;

/**
 * FaceBlowingAKiss Emoji class.
 *
 * @version v13.1
 *
 **/
class FaceBlowingAKiss
{
    public const SYMBOL = "😘";

    public const HEX = "1F618";

    public const CODE = "\u{1F618}";

    public const NAME = 'face blowing a kiss';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-affection';

    public const NAME_WITH_UNDERSCORES = 'face_blowing_a_kiss';

    public const TAGS = 'flirt';

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
