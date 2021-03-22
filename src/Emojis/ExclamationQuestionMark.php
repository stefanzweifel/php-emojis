<?php

namespace Wnx\Emojis\Emojis;

/**
 * ExclamationQuestionMark Emoji class.
 *
 * @version v13.1
 *
 **/
class ExclamationQuestionMark
{
    public const SYMBOL = "⁉️";

    public const HEX = "2049 FE0F";

    public const CODE = "\u{2049}\u{FE0F}";

    public const NAME = 'exclamation question mark';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'punctuation';

    public const NAME_WITH_UNDERSCORES = 'exclamation_question_mark';

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
