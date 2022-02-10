<?php

namespace Wnx\Emojis\Emojis;

/**
 * SpeakingHead Emoji class.
 *
 * @version v14.0
 *
 **/
class SpeakingHead
{

    public const SYMBOL = "🗣️";

    public const HEX = "1F5E3 FE0F";

    public const CODE = "\u{1F5E3}\u{FE0F}";

    public const NAME = 'speaking head';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-symbol';

    public const NAME_WITH_UNDERSCORES = 'speaking_head';

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
