<?php

namespace Wnx\Emojis\Emojis;

/**
 * Handshake Emoji class.
 *
 * @version v14.0
 *
 **/
class Handshake
{

    public const SYMBOL = "🤝";

    public const HEX = "1F91D";

    public const CODE = "\u{1F91D}";

    public const NAME = 'handshake';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hands';

    public const NAME_WITH_UNDERSCORES = 'handshake';

    public const TAGS = 'deal';

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
