<?php

namespace Wnx\Emojis\Emojis;

/**
 * InboxTray Emoji class.
 *
 * @version v14.0
 *
 **/
class InboxTray
{

    public const SYMBOL = "📥";

    public const HEX = "1F4E5";

    public const CODE = "\u{1F4E5}";

    public const NAME = 'inbox tray';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'mail';

    public const NAME_WITH_UNDERSCORES = 'inbox_tray';

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
