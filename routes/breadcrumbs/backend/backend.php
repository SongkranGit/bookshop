<?php

Breadcrumbs::register('admin.dashboard', function ($breadcrumbs) {
    $breadcrumbs->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::register('admin.category', function ($breadcrumbs) {
    $breadcrumbs->push(__('strings.backend.dashboard.title'), route('admin.category'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
