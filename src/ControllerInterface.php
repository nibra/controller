<?php
/**
 * Part of the Joomla Framework Controller Package
 *
 * @copyright  Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Controller;

use Joomla\Application\AbstractApplication;
use Joomla\Input\Input;

/**
 * Joomla Framework Controller Interface
 *
 * @since  1.0
 */
interface ControllerInterface extends \Serializable
{
	/**
	 * Execute the controller.
	 *
	 * @return  boolean  True if controller finished execution, false if the controller did not
	 *                   finish execution. A controller might return false if some precondition for
	 *                   the controller to run has not been satisfied.
	 *
	 * @since   1.0
	 * @throws  \LogicException
	 * @throws  \RuntimeException
	 */
	public function execute();

	/**
	 * Get the application object.
	 *
	 * @return  AbstractApplication  The application object.
	 *
	 * @since   1.0
	 */
	public function getApplication();

	/**
	 * Get the input object.
	 *
	 * @return  Input  The input object.
	 *
	 * @since   1.0
	 */
	public function getInput();

	/**
	 * Set the application object.
	 *
	 * @param   AbstractApplication  $app  The application object.
	 *
	 * @return  ControllerInterface  Returns itself to support chaining.
	 *
	 * @since   1.0
	 */
	public function setApplication(AbstractApplication $app);

	/**
	 * Set the input object.
	 *
	 * @param   Input  $input  The input object.
	 *
	 * @return  ControllerInterface  Returns itself to support chaining.
	 *
	 * @since   1.0
	 */
	public function setInput(Input $input);
}
