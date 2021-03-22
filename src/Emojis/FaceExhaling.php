<?php

namespace Wnx\Emojis\Emojis;

/**
 * FaceExhaling Emoji class.
 *
 * @version v13.1
 *
 **/
class FaceExhaling
{
    public const SYMBOL = "😮‍💨";

    public const HEX = "1F62E 200D 1F4A8";

    public const CODE = "\u{1F62E}\u{200D}\u{1F4A8}";

    public const NAME = 'face exhaling';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-neutral-skeptical';

    public const NAME_WITH_UNDERSCORES = 'face_exhaling';

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
