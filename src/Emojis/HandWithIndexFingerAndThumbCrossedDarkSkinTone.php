<?php

namespace Wnx\Emojis\Emojis;

/**
 * HandWithIndexFingerAndThumbCrossedDarkSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class HandWithIndexFingerAndThumbCrossedDarkSkinTone
{

    public const SYMBOL = "🫰🏿";

    public const HEX = "1FAF0 1F3FF";

    public const CODE = "\u{1FAF0}\u{1F3FF}";

    public const NAME = 'hand with index finger and thumb crossed dark skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-partial';

    public const NAME_WITH_UNDERSCORES = 'hand_with_index_finger_and_thumb_crossed_dark_skin_tone';

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
