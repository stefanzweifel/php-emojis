<?php

namespace Wnx\Emojis\Emojis;

/**
 * KissingFaceWithSmilingEyes Emoji class.
 *
 * @version v13.1
 *
 **/
class KissingFaceWithSmilingEyes {

    public const SYMBOL = "😙";

    public const HEX = "1F619";

    public const CODE = "\u{1F619}";

    public const NAME = 'kissing face with smiling eyes';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-affection';

    public const NAME_WITH_UNDERSCORES = 'kissing_face_with_smiling_eyes';

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
