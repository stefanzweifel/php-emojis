<?php

namespace Wnx\Emojis\Emojis;

/**
 * Key Emoji class.
 *
 * @version v13.1
 *
 **/
class Key {

    public const SYMBOL = "🔑";

    public const HEX = "1F511";

    public const CODE = "\u{1F511}";

    public const NAME = 'key';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'lock';

    public const NAME_WITH_UNDERSCORES = 'key';

    public const TAGS = 'lock password';

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