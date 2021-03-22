<?php

namespace Wnx\Emojis\Emojis;

/**
 * FileCabinet Emoji class.
 *
 * @version v13.1
 *
 **/
class FileCabinet {

    public const SYMBOL = "🗄️";

    public const HEX = "1F5C4 FE0F";

    public const CODE = "\u{1F5C4}\u{FE0F}";

    public const NAME = 'file cabinet';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'office';

    public const NAME_WITH_UNDERSCORES = 'file_cabinet';

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
