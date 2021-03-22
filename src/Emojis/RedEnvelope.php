<?php

namespace Wnx\Emojis\Emojis;

/**
 * RedEnvelope Emoji class.
 *
 * @version v13.1
 *
 **/
class RedEnvelope {

    public const SYMBOL = "🧧";

    public const HEX = "1F9E7";

    public const CODE = "\u{1F9E7}";

    public const NAME = 'red envelope';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'event';

    public const NAME_WITH_UNDERSCORES = 'red_envelope';

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