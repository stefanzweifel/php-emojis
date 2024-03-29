<?php

namespace Wnx\Emojis\Emojis;

/**
 * WhiteQuestionMark Emoji class.
 *
 * @version v14.0
 *
 **/
class WhiteQuestionMark
{

    public const SYMBOL = "❔";

    public const HEX = "2754";

    public const CODE = "\u{2754}";

    public const NAME = 'white question mark';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'punctuation';

    public const NAME_WITH_UNDERSCORES = 'white_question_mark';

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
