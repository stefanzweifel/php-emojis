<?php

namespace Wnx\Emojis\Emojis;

/**
 * SosButton Emoji class.
 *
 * @version v14.0
 *
 **/
class SosButton
{

    public const SYMBOL = "🆘";

    public const HEX = "1F198";

    public const CODE = "\u{1F198}";

    public const NAME = 'SOS button';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'alphanum';

    public const NAME_WITH_UNDERSCORES = 'SOS_button';

    public const TAGS = 'help emergency';

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
