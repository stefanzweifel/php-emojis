<?php

namespace Wnx\Emojis\Emojis;

/**
 * FaceWithHeadBandage Emoji class.
 *
 * @version v13.1
 *
 **/
class FaceWithHeadBandage
{
    public const SYMBOL = "🤕";

    public const HEX = "1F915";

    public const CODE = "\u{1F915}";

    public const NAME = 'face with head-bandage';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-unwell';

    public const NAME_WITH_UNDERSCORES = 'face_with_head-bandage';

    public const TAGS = 'hurt';

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
