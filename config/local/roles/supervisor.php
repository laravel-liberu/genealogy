<?php

return [
    'order' => 2,
    'role' => ['name' => 'supervisor', 'display_name' => 'Supervisor'],
    'default_menu' => 'dashboard.index',
    'permissions' => [
        'core.home.index',
        'core.avatars.update',
        'core.avatars.show',
        'core.avatars.store',
        'core.preferences.store',
        'core.preferences.reset',
        'dashboard.index',
        'system.roles.options',
        'administration.users.show',
        'core.impersonate.stop',
        'core.notifications.index',
        'core.notifications.count',
        'core.notifications.read',
        'core.notifications.readAll',
        'core.notifications.destroy',
        'core.notifications.destroyAll',
        'system.tutorials.load',
        'core.documents.store',
        'core.documents.index',
        'core.documents.destroy',
        'core.comments.users',
        'core.comments.index',
        'core.comments.store',
        'core.comments.update',
        'core.comments.destroy',
        'howTo.videos.index',
        'howTo.videos.show',
        'howTo.tags.index',
        'howTo.posters.show',
        'core.countries.options',
        'core.addresses.update',
        'core.addresses.store',
        'core.addresses.destroy',
        'core.addresses.index',
        'core.addresses.makeDefault',
        'core.addresses.edit',
        'core.addresses.create',
        'core.discussions.index',
        'core.discussions.store',
        'core.discussions.show',
        'core.discussions.update',
        'core.discussions.destroy',
        'core.discussions.storeReply',
        'core.discussions.updateReply',
        'core.discussions.destroyReply',
        'core.discussions.react',
        'core.files.index',
        'core.files.link',
        'core.files.show',
        'core.files.download',
        'core.files.destroy',
        'core.uploads.store',
        'core.uploads.destroy',
        'core.search.index',
        'core.calendar.events.index',
        'core.calendar.events.create',
        'core.calendar.events.store',
        'core.calendar.events.edit',
        'core.calendar.events.update',
        'core.calendar.events.destroy',
        'core.calendar.create',
        'core.calendar.store',
        'core.calendar.edit',
        'core.calendar.update',
        'core.calendar.destroy',
        'core.calendar.index',
        'core.calendar.options',
        'core.addresses.options',
        'core.addresses.localities',
        'core.addresses.regions',
        'core.addresses.localize',
    ],
];
