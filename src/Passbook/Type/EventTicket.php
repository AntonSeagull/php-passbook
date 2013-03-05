<?php

/*
 * This file is part of the Passbook package.
 *
 * (c) Eymen Gunay <eymen@egunay.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Passbook\Type;

/**
 * EventTicket
 *
 * @author Eymen Gunay <eymen@egunay.com>
 */
class EventTicket extends Pass
{
	/**
	 * Pass type
	 * @var string
	 */
	protected $type = 'eventTicket';
}