<?php

namespace Wnx\Emojis\Emojis;

/**
 * FaceWithCrossedOutEyes Emoji class.
 *
 * @version v14.0
 *
 **/
class FaceWithCrossedOutEyes
{

    public const SYMBOL = "😵";

    public const HEX = "1F635";

    public const CODE = "\u{1F635}";

    public const NAME = 'face with crossed-out eyes';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-unwell';

    public const NAME_WITH_UNDERSCORES = 'face_with_crossed-out_eyes';

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
