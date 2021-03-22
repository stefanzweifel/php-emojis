<?php

namespace Wnx\Emojis\Emojis;

/**
 * FloppyDisk Emoji class.
 *
 * @version v13.1
 *
 **/
class FloppyDisk {

    public const SYMBOL = "💾";

    public const HEX = "1F4BE";

    public const CODE = "\u{1F4BE}";

    public const NAME = 'floppy disk';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'computer';

    public const NAME_WITH_UNDERSCORES = 'floppy_disk';

    public const TAGS = 'save';

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