<?php

namespace Craft;

class HappyBradWidget extends BaseWidget
{
	protected $omg_so_handsome = 'http://i.imgur.com/WbKwPij.jpg';

	public function getName()
	{
		return Craft::t('HappyBrad');
	}

	public function getBodyHtml()
	{
		return '<img src="' . $this->omg_so_handsome . '" alt="OMG so handsome">';
	}
}
