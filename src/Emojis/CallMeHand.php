<?php

namespace Wnx\Emojis\Emojis;

/**
 * CallMeHand Emoji class.
 *
 * @version v13.1
 *
 **/
class CallMeHand
{
    public const SYMBOL = "🤙";

    public const HEX = "1F919";

    public const CODE = "\u{1F919}";

    public const NAME = 'call me hand';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-partial';

    public const NAME_WITH_UNDERSCORES = 'call_me_hand';

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
