<?php

namespace Wnx\Emojis\Emojis;

/**
 * SmilingFaceWithHeartEyes Emoji class.
 *
 * @version v13.1
 *
 **/
class SmilingFaceWithHeartEyes {

    public const SYMBOL = "😍";

    public const HEX = "1F60D";

    public const CODE = "\u{1F60D}";

    public const NAME = 'smiling face with heart-eyes';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-affection';

    public const NAME_WITH_UNDERSCORES = 'smiling_face_with_heart-eyes';

    public const TAGS = 'love crush';

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
