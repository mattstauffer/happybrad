<?php

namespace Craft;

class HappyBradPlugin extends BasePlugin
{
	public function getName()
	{
		 return Craft::t('HappyBrad');
	}

	public function getVersion()
	{
		return '0.1.1';
	}

	public function getDeveloper()
	{
		return 'Matt Stauffer';
	}

	public function getDeveloperUrl()
	{
		return 'http://mattstauffer.co/';
	}
}
