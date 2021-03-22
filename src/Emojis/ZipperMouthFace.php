<?php

namespace Wnx\Emojis\Emojis;

/**
 * ZipperMouthFace Emoji class.
 *
 * @version v13.1
 *
 **/
class ZipperMouthFace
{
    public const SYMBOL = "🤐";

    public const HEX = "1F910";

    public const CODE = "\u{1F910}";

    public const NAME = 'zipper-mouth face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-neutral-skeptical';

    public const NAME_WITH_UNDERSCORES = 'zipper-mouth_face';

    public const TAGS = 'silence hush';

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
