<?php

namespace Wnx\Emojis\Emojis;

/**
 * ClosedMailboxWithLoweredFlag Emoji class.
 *
 * @version v14.0
 *
 **/
class ClosedMailboxWithLoweredFlag
{

    public const SYMBOL = "📪";

    public const HEX = "1F4EA";

    public const CODE = "\u{1F4EA}";

    public const NAME = 'closed mailbox with lowered flag';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'mail';

    public const NAME_WITH_UNDERSCORES = 'closed_mailbox_with_lowered_flag';

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
