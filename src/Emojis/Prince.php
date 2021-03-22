<?php

namespace Wnx\Emojis\Emojis;

/**
 * Prince Emoji class.
 *
 * @version v13.1
 *
 **/
class Prince {

    public const SYMBOL = "🤴";

    public const HEX = "1F934";

    public const CODE = "\u{1F934}";

    public const NAME = 'prince';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'prince';

    public const TAGS = 'crown royal';

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
