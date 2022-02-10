<?php

namespace Wnx\Emojis\Emojis;

/**
 * RaisedFist Emoji class.
 *
 * @version v14.0
 *
 **/
class RaisedFist
{

    public const SYMBOL = "✊";

    public const HEX = "270A";

    public const CODE = "\u{270A}";

    public const NAME = 'raised fist';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-closed';

    public const NAME_WITH_UNDERSCORES = 'raised_fist';

    public const TAGS = 'power';

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
