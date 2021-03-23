<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/agents' => [[['_route' => 'agents_index', '_controller' => 'App\\Controller\\AgentsController::index'], null, null, null, false, false, null]],
        '/agents-add' => [[['_route' => 'agent_add', '_controller' => 'App\\Controller\\AgentsController::addAgent'], null, null, null, false, false, null]],
        '/contacts' => [[['_route' => 'contacts_index', '_controller' => 'App\\Controller\\ContactsController::index'], null, null, null, false, false, null]],
        '/contacts-add' => [[['_route' => 'contact_add', '_controller' => 'App\\Controller\\ContactsController::addContact'], null, null, null, false, false, null]],
        '/hideouts' => [[['_route' => 'hideouts_index', '_controller' => 'App\\Controller\\HideoutsController::index'], null, null, null, false, false, null]],
        '/hideouts-add' => [[['_route' => 'hideout_add', '_controller' => 'App\\Controller\\HideoutsController::addSkill'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app.home', '_controller' => 'App\\Controller\\MissionsController::index'], null, null, null, false, false, null]],
        '/missions-add' => [[['_route' => 'mission_add', '_controller' => 'App\\Controller\\MissionsController::addSkill'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/skills' => [[['_route' => 'skills_index', '_controller' => 'App\\Controller\\SkillsController::index'], null, null, null, false, false, null]],
        '/skills-add' => [[['_route' => 'skill_add', '_controller' => 'App\\Controller\\SkillsController::addSkill'], null, null, null, false, false, null]],
        '/targets' => [[['_route' => 'targets_index', '_controller' => 'App\\Controller\\TargetsController::index'], null, null, null, false, false, null]],
        '/targets-add' => [[['_route' => 'target_add', '_controller' => 'App\\Controller\\TargetsController::addTarget'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/agents/([^/]++)(*:185)'
                .'|/contacts/([^/]++)(*:211)'
                .'|/hideouts/([^/]++)(*:237)'
                .'|/missions/([^/]++)(*:263)'
                .'|/skills/([^/]++)(*:287)'
                .'|/targets/([^/]++)(*:312)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        185 => [[['_route' => 'agent_details', '_controller' => 'App\\Controller\\AgentsController::showAgent'], ['id'], null, null, false, true, null]],
        211 => [[['_route' => 'contact_details', '_controller' => 'App\\Controller\\ContactsController::showContact'], ['id'], null, null, false, true, null]],
        237 => [[['_route' => 'hideout_details', '_controller' => 'App\\Controller\\HideoutsController::showHideout'], ['id'], null, null, false, true, null]],
        263 => [[['_route' => 'mission_details', '_controller' => 'App\\Controller\\MissionsController::showMission'], ['id'], null, null, false, true, null]],
        287 => [[['_route' => 'skill_details', '_controller' => 'App\\Controller\\SkillsController::showSkill'], ['id'], null, null, false, true, null]],
        312 => [
            [['_route' => 'target_details', '_controller' => 'App\\Controller\\TargetsController::showAgent'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
