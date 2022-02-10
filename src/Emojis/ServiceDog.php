<?php

namespace Wnx\Emojis\Emojis;

/**
 * ServiceDog Emoji class.
 *
 * @version v14.0
 *
 **/
class ServiceDog
{

    public const SYMBOL = "🐕‍🦺";

    public const HEX = "1F415 200D 1F9BA";

    public const CODE = "\u{1F415}\u{200D}\u{1F9BA}";

    public const NAME = 'service dog';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'animal-mammal';

    public const NAME_WITH_UNDERSCORES = 'service_dog';

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
