<?php

namespace Wnx\Emojis\Emojis;

/**
 * FaceWithOpenEyesAndHandOverMouth Emoji class.
 *
 * @version v14.0
 *
 **/
class FaceWithOpenEyesAndHandOverMouth
{

    public const SYMBOL = "🫢";

    public const HEX = "1FAE2";

    public const CODE = "\u{1FAE2}";

    public const NAME = 'face with open eyes and hand over mouth';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-hand';

    public const NAME_WITH_UNDERSCORES = 'face_with_open_eyes_and_hand_over_mouth';

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
