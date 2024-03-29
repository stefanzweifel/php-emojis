<?php

namespace Wnx\Emojis\Emojis;

/**
 * GrinningSquintingFace Emoji class.
 *
 * @version v14.0
 *
 **/
class GrinningSquintingFace
{

    public const SYMBOL = "😆";

    public const HEX = "1F606";

    public const CODE = "\u{1F606}";

    public const NAME = 'grinning squinting face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-smiling';

    public const NAME_WITH_UNDERSCORES = 'grinning_squinting_face';

    public const TAGS = 'happy haha';

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
