<?php

namespace Wnx\Emojis\Emojis;

/**
 * RelievedFace Emoji class.
 *
 * @version v13.1
 *
 **/
class RelievedFace
{
    public const SYMBOL = "😌";

    public const HEX = "1F60C";

    public const CODE = "\u{1F60C}";

    public const NAME = 'relieved face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-sleepy';

    public const NAME_WITH_UNDERSCORES = 'relieved_face';

    public const TAGS = 'whew';

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
