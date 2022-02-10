<?php

namespace Wnx\Emojis\Emojis;

/**
 * FuneralUrn Emoji class.
 *
 * @version v14.0
 *
 **/
class FuneralUrn
{

    public const SYMBOL = "⚱️";

    public const HEX = "26B1 FE0F";

    public const CODE = "\u{26B1}\u{FE0F}";

    public const NAME = 'funeral urn';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'other-object';

    public const NAME_WITH_UNDERSCORES = 'funeral_urn';

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
