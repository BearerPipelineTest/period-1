<?php

/**
 * League.Period (https://period.thephpleague.com)
 *
 * (c) Ignace Nyamagana Butera <nyamsprod@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace League\Period;

/**
 * Exception thrown by the Sequence class.
 *
 * @package League.period
 * @author  Ignace Nyamagana Butera <nyamsprod@gmail.com>
 * @since   4.1.0
 */
final class CannotAccessPeriod extends \InvalidArgumentException implements TimeRangeError
{
    private function __construct(string $message)
    {
        parent::__construct($message);
    }

    public static function dueToInvalidIndex(int $offset): self
    {
        return new self('`'.$offset.'` is an invalid offset in the '.Sequence::class.' object.');
    }
}