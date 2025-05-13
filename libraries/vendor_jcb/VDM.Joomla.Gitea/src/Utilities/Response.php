<?php
/**
 * @package    Joomla.Component.Builder
 *
 * @created    4th September, 2022
 * @author     Llewellyn van der Merwe <https://dev.vdm.io>
 * @git        Joomla Component Builder <https://git.vdm.dev/joomla/Component-Builder>
 * @copyright  Copyright (C) 2015 Vast Development Method. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace VDM\Joomla\Gitea\Utilities;


use Joomla\CMS\Http\Response as JoomlaResponse;
use VDM\Joomla\Utilities\JsonHelper;
use VDM\Joomla\Utilities\StringHelper;


/**
 * The Gitea Response
 * 
 * @since 3.2.0
 */
final class Response
{
	/**
	 * Process the response and decode it.
	 *
	 * @param   JoomlaResponse  $response      The response.
	 * @param   integer         $expectedCode  The expected "good" code.
	 * @param   mixed           $default       The default if body not have length
	 *
	 * @return  mixed
	 *
	 * @since   3.2.0
	 * @throws  \DomainException
	 **/
	public function get($response, int  $expectedCode = 200, $default = null)
	{
		// Validate the response code.
		if ($response->code != $expectedCode)
		{
			// Decode the error response and throw an exception.
			$message =  $this->error($response);

			throw new \DomainException("Invalid response received from API. $message", $response->code);

		}

		return $this->body($response, $default);
	}

	/**
	 * Process the response and decode it. (when we have multiple success codes)
	 *
	 * @param   JoomlaResponse  $response                    The response.
	 * @param   array           [$expectedCode => $default]  The expected "good" code. and The default if body not have length
	 *
	 * @return  mixed
	 *
	 * @since   3.2.0
	 * @throws  \DomainException
	 **/
	public function get_($response, array $validate = [200 => null])
	{
		// Validate the response code.
		if (!isset($validate[$response->code]))
		{
			// Decode the error response and throw an exception.
			$message =  $this->error($response);

			throw new \DomainException("Invalid response received from API. $message", $response->code);

		}

		return $this->body($response, $validate[$response->code]);
	}

	/**
	 * Return the body from the response
	 *
	 * @param   JoomlaResponse  $response    The response.
	 * @param   mixed           $default     The default if body not have length
	 *
	 * @return  mixed
	 * @since   3.2.0
	 **/
	protected function body($response, $default = null)
	{
		$body = $response->body ?? null;
		// check that we have a body
		if (StringHelper::check($body))
		{
			if (JsonHelper::check($body))
			{
				$body = json_decode((string) $body);

				if (isset($body->content_base64))
				{
					$body->content = base64_decode((string) $body->content_base64);
				}
			}

			return $body;
		}

		return $default;
	}

	/**
	 * Extract an error message from a response object.
	 *
	 * @param   JoomlaResponse  $response  The response object.
	 *
	 * @return  string  The extracted error message, or an empty string.
	 * @since   3.2.0
	 */
	protected function error($response): string
	{
		// JSON decode helpers
		$decodeJson = static fn($value) => JsonHelper::check($value) ? json_decode($value, true) : null;
		$decodeJsonObject = static fn($value) => JsonHelper::check($value) ? json_decode($value) : null;

		// Try decoding from body
		if (!empty($response->body))
		{
			$errorData = $decodeJsonObject($response->body);

			if (is_object($errorData))
			{
				return $errorData->error ?? $errorData->message ?? '';
			}
		}

		// Try decoding from errors
		if (!empty($response->errors))
		{
			$errorArray = $decodeJson($response->errors);

			if (is_array($errorArray))
			{
				if (!empty($response->message) && StringHelper::check($response->message))
				{
					array_unshift($errorArray, $response->message);
				}

				return implode("\n", $errorArray);
			}
		}

		// Fallback
		return '';
	}
}

