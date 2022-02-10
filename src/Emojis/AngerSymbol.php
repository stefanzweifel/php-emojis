<?php

namespace Wnx\Emojis\Emojis;

/**
 * AngerSymbol Emoji class.
 *
 * @version v14.0
 *
 **/
class AngerSymbol
{

    public const SYMBOL = "💢";

    public const HEX = "1F4A2";

    public const CODE = "\u{1F4A2}";

    public const NAME = 'anger symbol';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'emotion';

    public const NAME_WITH_UNDERSCORES = 'anger_symbol';

    public const TAGS = 'angry';

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
