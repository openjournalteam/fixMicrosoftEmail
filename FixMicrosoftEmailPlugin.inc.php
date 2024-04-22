<?php

import('lib.pkp.classes.plugins.GenericPlugin');

class FixMicrosoftEmailPlugin extends GenericPlugin
{
	/**
	 * @copydoc Plugin::getDisplayName()
	 */
	function getDisplayName()
	{
		return 'Fix Microsoft Email Plugin';
	}

	/**
	 * @copydoc Plugin::getDescription()
	 */
	function getDescription()
	{
		return 'This plugin is a workaround to fix Microsoft Email client.';
	}

	/**
	 * @copydoc Plugin::register()
	 */
	function register($category, $path, $mainContextId = null)
	{
		$success = parent::register($category, $path, $mainContextId);
		if ($success && $this->getEnabled($mainContextId)) {
			HookRegistry::register('Mail::send', [$this, 'onMailSend']);
		}
		return $success;
	}


	/**
	* Hook to Mail::send
	* @param $hookName string
	* @param $params array
	*/
	function onMailSend($hookName, $args)
	{
		$mail = $args[0]; // Mail
		$from = $mail->getFrom();
		if($from !== null){
			$mail->setFrom($mail->getEnvelopeSender(), $from['name']);
		}
	}
}
