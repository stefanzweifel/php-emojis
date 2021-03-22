<?php

namespace Wnx\Emojis\Emojis;

/**
 * TestTube Emoji class.
 *
 * @version v13.1
 *
 **/
class TestTube {

    public const SYMBOL = "🧪";

    public const HEX = "1F9EA";

    public const CODE = "\u{1F9EA}";

    public const NAME = 'test tube';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'science';

    public const NAME_WITH_UNDERSCORES = 'test_tube';

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
