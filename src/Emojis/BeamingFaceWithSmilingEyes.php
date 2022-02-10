<?php

namespace Wnx\Emojis\Emojis;

/**
 * BeamingFaceWithSmilingEyes Emoji class.
 *
 * @version v14.0
 *
 **/
class BeamingFaceWithSmilingEyes
{

    public const SYMBOL = "😁";

    public const HEX = "1F601";

    public const CODE = "\u{1F601}";

    public const NAME = 'beaming face with smiling eyes';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-smiling';

    public const NAME_WITH_UNDERSCORES = 'beaming_face_with_smiling_eyes';

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
