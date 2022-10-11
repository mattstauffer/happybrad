<?php


it('is brad', function() {

	$name = mattstauffer\happybrad\Widget::displayName();

	expect($name)->toBe('Happy Brad');

});


it('renders the img tag', function() {

	$widget = new mattstauffer\happybrad\Widget();
	$html = $widget->getBodyHtml();

	expect($html)->toBe('<img src="https://i.imgur.com/WbKwPij.jpg" alt="OMG so handsome" width="100%">');

});


test('the external image still exists', function() {

	$widget = new class() extends mattstauffer\happybrad\Widget {
    	public function getImageUrl(): string
    	{
        	return $this->omg_so_handsome;
    	}
    };

	$url = $widget->getImageUrl();
	$httpStatus = get_headers($url)[0];

	expect($httpStatus)->toContain('200 OK');

});