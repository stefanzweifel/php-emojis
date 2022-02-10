<?php

namespace Wnx\Emojis\Emojis;

/**
 * SlightlySmilingFace Emoji class.
 *
 * @version v14.0
 *
 **/
class SlightlySmilingFace
{

    public const SYMBOL = "🙂";

    public const HEX = "1F642";

    public const CODE = "\u{1F642}";

    public const NAME = 'slightly smiling face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-smiling';

    public const NAME_WITH_UNDERSCORES = 'slightly_smiling_face';

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
