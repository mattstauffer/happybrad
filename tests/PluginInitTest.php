<?php

use craft\services\Dashboard;

it('registers the widget type', function() {
    // Init plugin
    Craft::createObject(\mattstauffer\happybrad\Plugin::class);

    // Get types (triggers Dashboard::EVENT_REGISTER_WIDGET_TYPES)
    $dashboard = Craft::createObject(Dashboard::class);
    $types = $dashboard->getAllWidgetTypes();

    expect($types)->toContain('mattstauffer\happybrad\Widget');

});
