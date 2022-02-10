<?php

namespace Wnx\Emojis\Emojis;

/**
 * IndexPointingAtTheViewerDarkSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class IndexPointingAtTheViewerDarkSkinTone
{

    public const SYMBOL = "🫵🏿";

    public const HEX = "1FAF5 1F3FF";

    public const CODE = "\u{1FAF5}\u{1F3FF}";

    public const NAME = 'index pointing at the viewer dark skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-single-finger';

    public const NAME_WITH_UNDERSCORES = 'index_pointing_at_the_viewer_dark_skin_tone';

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
