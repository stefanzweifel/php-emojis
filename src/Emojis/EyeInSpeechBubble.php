<?php

namespace Wnx\Emojis\Emojis;

/**
 * EyeInSpeechBubble Emoji class.
 *
 * @version v13.1
 *
 **/
class EyeInSpeechBubble
{
    public const SYMBOL = "👁️‍🗨️";

    public const HEX = "1F441 FE0F 200D 1F5E8 FE0F";

    public const CODE = "\u{1F441}\u{FE0F}\u{200D}\u{1F5E8}\u{FE0F}";

    public const NAME = 'eye in speech bubble';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'emotion';

    public const NAME_WITH_UNDERSCORES = 'eye_in_speech_bubble';

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
