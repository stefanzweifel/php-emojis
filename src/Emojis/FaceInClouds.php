<?php

namespace Wnx\Emojis\Emojis;

/**
 * FaceInClouds Emoji class.
 *
 * @version v13.1
 *
 **/
class FaceInClouds {

    public const SYMBOL = "😶‍🌫️";

    public const HEX = "1F636 200D 1F32B FE0F";

    public const CODE = "\u{1F636}\u{200D}\u{1F32B}\u{FE0F}";

    public const NAME = 'face in clouds';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-neutral-skeptical';

    public const NAME_WITH_UNDERSCORES = 'face_in_clouds';

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
