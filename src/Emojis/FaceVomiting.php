<?php

namespace Wnx\Emojis\Emojis;

/**
 * FaceVomiting Emoji class.
 *
 * @version v14.0
 *
 **/
class FaceVomiting
{

    public const SYMBOL = "🤮";

    public const HEX = "1F92E";

    public const CODE = "\u{1F92E}";

    public const NAME = 'face vomiting';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-unwell';

    public const NAME_WITH_UNDERSCORES = 'face_vomiting';

    public const TAGS = 'barf sick';

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
