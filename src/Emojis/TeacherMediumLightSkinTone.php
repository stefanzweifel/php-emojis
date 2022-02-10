<?php

namespace Wnx\Emojis\Emojis;

/**
 * TeacherMediumLightSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class TeacherMediumLightSkinTone
{

    public const SYMBOL = "🧑🏼‍🏫";

    public const HEX = "1F9D1 1F3FC 200D 1F3EB";

    public const CODE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F3EB}";

    public const NAME = 'teacher medium-light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'teacher_medium-light_skin_tone';

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
