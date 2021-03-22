<?php

namespace Wnx\Emojis\Emojis;

/**
 * SpeechBalloon Emoji class.
 *
 * @version v13.1
 *
 **/
class SpeechBalloon {

    public const SYMBOL = "💬";

    public const HEX = "1F4AC";

    public const CODE = "\u{1F4AC}";

    public const NAME = 'speech balloon';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'emotion';

    public const NAME_WITH_UNDERSCORES = 'speech_balloon';

    public const TAGS = 'comment';

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
