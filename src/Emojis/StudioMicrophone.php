<?php

namespace Wnx\Emojis\Emojis;

/**
 * StudioMicrophone Emoji class.
 *
 * @version v13.1
 *
 **/
class StudioMicrophone
{
    public const SYMBOL = "🎙️";

    public const HEX = "1F399 FE0F";

    public const CODE = "\u{1F399}\u{FE0F}";

    public const NAME = 'studio microphone';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'music';

    public const NAME_WITH_UNDERSCORES = 'studio_microphone';

    public const TAGS = 'podcast';

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
