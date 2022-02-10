<?php

namespace Wnx\Emojis\Emojis;

/**
 * SmilingFaceWithHorns Emoji class.
 *
 * @version v14.0
 *
 **/
class SmilingFaceWithHorns
{

    public const SYMBOL = "😈";

    public const HEX = "1F608";

    public const CODE = "\u{1F608}";

    public const NAME = 'smiling face with horns';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-negative';

    public const NAME_WITH_UNDERSCORES = 'smiling_face_with_horns';

    public const TAGS = 'devil evil horns';

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
