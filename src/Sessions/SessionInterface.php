<?php namespace Cartalyst\Sentinel\Sessions;
/**
 * Part of the Sentinel package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Cartalyst PSL License.
 *
 * This source file is subject to the Cartalyst PSL License that is
 * bundled with this package in the license.txt file.
 *
 * @package    Sentinel
 * @version    1.0.5
 * @author     Cartalyst LLC
 * @license    Cartalyst PSL
 * @copyright  (c) 2011-2014, Cartalyst LLC
 * @link       http://cartalyst.com
 */

interface SessionInterface {

	/**
	 * Put a value in the Sentinel session.
	 *
	 * @param  mixed  $value
	 * @return void
	 */
	public function put($value);

	/**
	 * Returns the Sentinel session value.
	 *
	 * @return mixed
	 */
	public function get();

	/**
	 * Removes the Sentinel session.
	 *
	 * @return void
	 */
	public function forget();

}