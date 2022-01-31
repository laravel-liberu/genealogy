<?php

return [
    'order' => 3,
    'role' => ['name' => 'Agent', 'display_name' => 'Agent Role'],
    'default_menu' => 'dashboard.index',
    'permissions' => [
        'core.home.index',
        'core.avatars.update',
        'core.avatars.show',
        'core.avatars.store',
        'core.preferences.store',
        'core.preferences.resetToDefault',
        'dashboard.index',
        'administration.userGroups.initTable',
        'administration.users.show',
        'core.impersonate.stop',
        'core.notifications.count',
        'core.notifications.read',
        'core.notifications.readAll',
        'core.notifications.destroyAll',
        'system.tutorials.load',
        'core.comments.index',
        'core.comments.store',
        'core.comments.update',
        'core.comments.destroy',
        'howTo.videos.index',
        'howTo.videos.show',
        'howTo.tags.index',
        'howTo.posters.show',
        'core.notifications.index',
        'core.notifications.destroy',
        'core.search.index',
        'core.uploads.store',
        'core.uploads.destroy',
        'core.calendar.events.index',
        'core.calendar.create',
        'core.calendar.store',
        'core.calendar.edit',
        'core.calendar.update',
        'core.calendar.destroy',
        'core.calendar.index',
        'core.calendar.options',
        'core.comments.users',
        'system.localisation.options',
        'export.cancel',
    ]
];
