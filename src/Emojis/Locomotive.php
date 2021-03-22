<?php

namespace Wnx\Emojis\Emojis;

/**
 * Locomotive Emoji class.
 *
 * @version v13.1
 *
 **/
class Locomotive
{
    public const SYMBOL = "🚂";

    public const HEX = "1F682";

    public const CODE = "\u{1F682}";

    public const NAME = 'locomotive';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'transport-ground';

    public const NAME_WITH_UNDERSCORES = 'locomotive';

    public const TAGS = 'train';

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
