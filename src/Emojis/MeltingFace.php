<?php

namespace Wnx\Emojis\Emojis;

/**
 * MeltingFace Emoji class.
 *
 * @version v14.0
 *
 **/
class MeltingFace
{

    public const SYMBOL = "🫠";

    public const HEX = "1FAE0";

    public const CODE = "\u{1FAE0}";

    public const NAME = 'melting face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-smiling';

    public const NAME_WITH_UNDERSCORES = 'melting_face';

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
