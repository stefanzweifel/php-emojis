<?php

namespace Wnx\Emojis\Emojis;

/**
 * Envelope Emoji class.
 *
 * @version v13.1
 *
 **/
class Envelope {

    public const SYMBOL = "✉️";

    public const HEX = "2709 FE0F";

    public const CODE = "\u{2709}\u{FE0F}";

    public const NAME = 'envelope';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'mail';

    public const NAME_WITH_UNDERSCORES = 'envelope';

    public const TAGS = 'letter email';

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
