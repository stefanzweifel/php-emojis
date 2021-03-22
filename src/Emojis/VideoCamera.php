<?php

namespace Wnx\Emojis\Emojis;

/**
 * VideoCamera Emoji class.
 *
 * @version v13.1
 *
 **/
class VideoCamera {

    public const SYMBOL = "📹";

    public const HEX = "1F4F9";

    public const CODE = "\u{1F4F9}";

    public const NAME = 'video camera';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'light & video';

    public const NAME_WITH_UNDERSCORES = 'video_camera';

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
