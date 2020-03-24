<?php

/**
 * Thanks to https://github.com/flaushi for his suggestion:
 * https://github.com/doctrine/dbal/issues/2873#issuecomment-534956358
 */
namespace Carbon\Doctrine;

use Doctrine\DBAL\Types\VarDateTimeImmutableType;

class DateTimeType extends VarDateTimeImmutableType
{
    use CarbonType;
}