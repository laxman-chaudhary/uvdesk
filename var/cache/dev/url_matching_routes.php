<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'base_route', '_controller' => 'App\\Controller\\BaseController::base'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/wizard/xhr/check-requirements' => [[['_route' => 'uvdesk_community_installation_wizard_check_requirements', '_controller' => 'App\\Controller\\ConfigureHelpdesk::evaluateSystemRequirements'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/verify-database-credentials' => [[['_route' => 'uvdesk_community_installation_wizard_verify_database_credentials', '_controller' => 'App\\Controller\\ConfigureHelpdesk::verifyDatabaseCredentials'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/intermediary/super-user' => [[['_route' => 'uvdesk_community_installation_wizard_store_super_user_credentials', '_controller' => 'App\\Controller\\ConfigureHelpdesk::prepareSuperUserDetailsXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/website-configure' => [[['_route' => 'uvdesk_community_installation_wizard_store_website_configuration', '_controller' => 'App\\Controller\\ConfigureHelpdesk::websiteConfigurationXHR'], null, null, null, false, false, null]],
        '/wizard/xhr/load/configurations' => [[['_route' => 'uvdesk_community_installation_wizard_update_configurations_xhr', '_controller' => 'App\\Controller\\ConfigureHelpdesk::updateConfigurationsXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/load/migrations' => [[['_route' => 'uvdesk_community_installation_wizard_migrate_database_schema_xhr', '_controller' => 'App\\Controller\\ConfigureHelpdesk::migrateDatabaseSchemaXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/load/entities' => [[['_route' => 'uvdesk_community_installation_wizard_populate_database_entities_xhr', '_controller' => 'App\\Controller\\ConfigureHelpdesk::populateDatabaseEntitiesXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/load/super-user' => [[['_route' => 'uvdesk_community_installation_wizard_create_default_super_user_xhr', '_controller' => 'App\\Controller\\ConfigureHelpdesk::createDefaultSuperUserXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/load/website-configure' => [[['_route' => 'uvdesk_community_installation_wizard_update_website_configuration', '_controller' => 'App\\Controller\\ConfigureHelpdesk::updateWebsiteConfigurationXHR'], null, ['POST' => 0], null, false, false, null]],
        '/mailbox/listener' => [[['_route' => 'helpdesk_member_mailbox_notification', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::processMailXHR', '_locale' => 'en'], null, null, null, false, false, null]],
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
                .'|/(en|fr|it)(?'
                    .'|/(?'
                        .'|member/(?'
                            .'|log(?'
                                .'|in(*:205)'
                                .'|out(*:216)'
                            .')'
                            .'|dashboard(*:234)'
                            .'|pr(?'
                                .'|o(?'
                                    .'|file(?'
                                        .'|(*:258)'
                                    .')'
                                    .'|cessRawEmail(*:279)'
                                .')'
                                .'|ivilege(?'
                                    .'|s(?'
                                        .'|(*:302)'
                                        .'|/xhr(*:314)'
                                    .')'
                                    .'|/(?'
                                        .'|([^/]++)(*:335)'
                                        .'|delete/xhr(?:/([^/]++))?(*:367)'
                                    .')'
                                .')'
                                .'|epared\\-responses(?'
                                    .'|(*:397)'
                                    .'|/(?'
                                        .'|delete(?:/([^/]++))?(*:429)'
                                        .'|a(?'
                                            .'|jax(*:444)'
                                            .'|dd(*:454)'
                                        .')'
                                        .'|edit(?:/([^/]++))?(*:481)'
                                        .'|xhr/action/options(?:/([^/]++)(?:/([^/]++))?)?(*:535)'
                                    .')'
                                .')'
                            .')'
                            .'|a(?'
                                .'|gent(?'
                                    .'|/xhr(?:/([^/]++))?(*:575)'
                                    .'|(?:/([^/]++))?(*:597)'
                                    .'|s(?'
                                        .'|(*:609)'
                                        .'|/xhr(*:621)'
                                    .')'
                                    .'|/activity/(?'
                                        .'|list(*:647)'
                                        .'|xhr(*:658)'
                                    .')'
                                .')'
                                .'|pps(?'
                                    .'|(*:674)'
                                    .'|/(?'
                                        .'|collection(*:696)'
                                        .'|([^/]++)/([^/]++)/([^/]++)(?'
                                            .'|(*:733)'
                                            .'|/(?'
                                                .'|api(*:748)'
                                                .'|callback(*:764)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|c(?'
                                .'|reate/(?'
                                    .'|agent(*:795)'
                                    .'|group(*:808)'
                                    .'|team(*:820)'
                                    .'|privilege(*:837)'
                                    .'|customer(*:853)'
                                .')'
                                .'|ustomer(?'
                                    .'|s(?'
                                        .'|(*:876)'
                                        .'|/xhr(*:888)'
                                    .')'
                                    .'|/update\\-star(*:910)'
                                    .'|(?:/([^/]++))?(*:932)'
                                    .'|/xhr(?:/([^/]++))?(*:958)'
                                .')'
                                .'|a(?'
                                    .'|che\\-clear(*:981)'
                                    .'|tegories(*:997)'
                                .')'
                            .')'
                            .'|group(?'
                                .'|s(?'
                                    .'|(*:1019)'
                                    .'|/xhr(*:1032)'
                                .')'
                                .'|/(?'
                                    .'|([^/]++)(*:1054)'
                                    .'|delete/xhr(?:/([^/]++))?(*:1087)'
                                .')'
                            .')'
                            .'|t(?'
                                .'|e(?'
                                    .'|am(?'
                                        .'|s(?'
                                            .'|(*:1115)'
                                            .'|/xhr(*:1128)'
                                        .')'
                                        .'|/(?'
                                            .'|([^/]++)(*:1150)'
                                            .'|delete/xhr(?:/([^/]++))?(*:1183)'
                                        .')'
                                    .')'
                                    .'|mplate(?'
                                        .'|s(*:1204)'
                                        .'|\\-ajax(?:/([^/]++))?(*:1233)'
                                        .'|/(?'
                                            .'|add(*:1249)'
                                            .'|edit(?:/([^/]++))?(*:1276)'
                                        .')'
                                    .')'
                                .')'
                                .'|h(?'
                                    .'|eme/helpdesk(*:1304)'
                                    .'|read(?'
                                        .'|s/(?'
                                            .'|ajax(?'
                                                .'|(?:/([^/]++))?(*:1346)'
                                                .'|/action(?:/([^/]++))?(*:1376)'
                                            .')'
                                            .'|update(?:/([^/]++))?(*:1406)'
                                        .')'
                                        .'|/(?'
                                            .'|encoded\\-images/save/([^/]++)(*:1449)'
                                            .'|add(?:/([^/]++))?(*:1475)'
                                        .')'
                                    .')'
                                .')'
                                .'|icket(?'
                                    .'|s(?'
                                        .'|(*:1499)'
                                        .'|/(?'
                                            .'|xhr(*:1515)'
                                            .'|mass\\-xhr(*:1533)'
                                            .'|filter\\-options(*:1557)'
                                            .'|search\\-filter\\-options(*:1589)'
                                        .')'
                                    .')'
                                    .'|/(?'
                                        .'|view(?:/([^/]++))?(*:1622)'
                                        .'|xhr(?:/([^/]++))?(*:1648)'
                                        .'|s(?'
                                            .'|ave(?'
                                                .'|(*:1667)'
                                                .'|d\\-reply\\-apply(?:/([^/]++))?(*:1705)'
                                            .')'
                                            .'|earch\\-filter\\-options(?'
                                                .'|(*:1740)'
                                            .')'
                                        .')'
                                        .'|trash/([^/]++)(*:1765)'
                                        .'|d(?'
                                            .'|elete/([^/]++)(*:1792)'
                                            .'|ownload(?'
                                                .'|(?:/([^/]++))?(*:1825)'
                                                .'|\\-zip(?:/([^/]++))?(*:1853)'
                                            .')'
                                        .')'
                                        .'|labels/(?'
                                            .'|save(*:1878)'
                                            .'|update(?:/([^/]++))?(*:1907)'
                                        .')'
                                        .'|bookmark/xhr(*:1929)'
                                        .'|update/(?'
                                            .'|details/([^/]++)(*:1964)'
                                            .'|attributes(?:/([^/]++))?(*:1997)'
                                        .')'
                                        .'|collaborator(?:/([^/]++))?(*:2033)'
                                        .'|quick\\-view(?:/([^/]++))?(*:2067)'
                                        .'|prepared\\-response/xhr(?:/([^/]++)(?:/([^/]++))?)?(*:2126)'
                                    .')'
                                    .'|\\-types(?'
                                        .'|(*:2146)'
                                        .'|/(?'
                                            .'|xhr(*:2162)'
                                            .'|create(*:2177)'
                                            .'|remove(?:/([^/]++))?(*:2206)'
                                            .'|update/([^/]++)(*:2230)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|member/access\\-token(*:2263)'
                            .'|s(?'
                                .'|aved\\-(?'
                                    .'|filter\\-xhr(?:/([^/]++))?(*:2310)'
                                    .'|repl(?'
                                        .'|ies(?'
                                            .'|(*:2332)'
                                            .'|/xhr(?:/([^/]++))?(*:2359)'
                                        .')'
                                        .'|y/(?'
                                            .'|edit(?:/([^/]++))?(*:2392)'
                                            .'|add(?:/([^/]++))?(*:2418)'
                                        .')'
                                    .')'
                                .')'
                                .'|e(?'
                                    .'|ttings/(?'
                                        .'|swiftmailer(?'
                                            .'|(*:2458)'
                                            .'|/(?'
                                                .'|xhr(?'
                                                    .'|(*:2477)'
                                                    .'|/remove\\-configurations(*:2509)'
                                                .')'
                                                .'|create(*:2525)'
                                                .'|update/([^/]++)(*:2549)'
                                            .')'
                                        .')'
                                        .'|email/settings(*:2574)'
                                        .'|mailbox(?'
                                            .'|(*:2593)'
                                            .'|/(?'
                                                .'|xhr(*:2609)'
                                                .'|create(*:2624)'
                                                .'|update(?:/([^/]++))?(*:2653)'
                                                .'|remove(?:/([^/]++))?(*:2682)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|rvice\\-call(*:2705)'
                                .')'
                                .'|upport\\-tags(?'
                                    .'|(*:2730)'
                                    .'|/(?'
                                        .'|xhr(*:2746)'
                                        .'|create(?:/([^/]++))?(*:2775)'
                                        .'|update(?:/([^/]++))?(*:2804)'
                                        .'|remove(?:/([^/]++))?(*:2833)'
                                    .')'
                                .')'
                            .')'
                            .'|email/xhr/settings_update(*:2870)'
                            .'|reports/achievements(?'
                                .'|(*:2902)'
                                .'|\\-data(*:2917)'
                            .')'
                            .'|workflow(?'
                                .'|s(?'
                                    .'|(*:2942)'
                                    .'|/xhr(*:2955)'
                                .')'
                                .'|/(?'
                                    .'|add(*:2972)'
                                    .'|edit/([^/]++)(*:2994)'
                                    .'|xhr/(?'
                                        .'|condition/options(?:/([^/]++))?(*:3041)'
                                        .'|action/options(?:/([^/]++)(?:/([^/]++))?)?(*:3092)'
                                    .')'
                                .')'
                                .'|\\-ajax(?:/([^/]++))?(*:3123)'
                            .')'
                            .'|file\\-(?'
                                .'|upload(*:3148)'
                                .'|remove(*:3163)'
                            .')'
                            .'|url\\-upload(*:3184)'
                            .'|knowledgebase/folders(?'
                                .'|(*:3217)'
                                .'|/(?'
                                    .'|xhr(*:3233)'
                                    .'|new(*:3245)'
                                    .'|update(?'
                                        .'|(?:/([^/]++))?(*:3277)'
                                        .'|/xhr(?:/([^/]++))?(*:3304)'
                                    .')'
                                .')'
                            .')'
                            .'|([^/]++)/categories(*:3335)'
                            .'|categories/ajax(*:3359)'
                            .'|([^/]++)/categories/ajax(*:3392)'
                            .'|category/(?'
                                .'|a(?'
                                    .'|dd(*:3419)'
                                    .'|jax(?:/([^/]++))?(*:3445)'
                                .')'
                                .'|edit(?:/([^/]++))?(*:3473)'
                            .')'
                            .'|articles(*:3491)'
                            .'|([^/]++)/articles(*:3517)'
                            .'|solution/([^/]++)/articles(?'
                                .'|(*:3555)'
                                .'|/ajax(*:3569)'
                            .')'
                            .'|a(?'
                                .'|rticle(?'
                                    .'|s/ajax(*:3598)'
                                    .'|/(?'
                                        .'|a(?'
                                            .'|dd(*:3617)'
                                            .'|jax(?:/([^/]++))?(*:3643)'
                                        .')'
                                        .'|edit(?:/([^/]++))?(*:3671)'
                                    .')'
                                    .'|History(?:/([^/]++))?(*:3702)'
                                    .'|Related(?:/([^/]++))?(*:3732)'
                                .')'
                                .'|nnouncement/(?'
                                    .'|list(*:3761)'
                                    .'|xhr(*:3773)'
                                .')'
                            .')'
                            .'|b(?'
                                .'|randing/(?'
                                    .'|theme(?:/([^/]++))?(*:3818)'
                                    .'|ajax(*:3831)'
                                .')'
                                .'|lock/spam(*:3850)'
                            .')'
                            .'|knowledgebase/announcement/(?'
                                .'|new(*:3893)'
                                .'|update(?:/([^/]++))?(*:3922)'
                                .'|remove(?:/([^/]++))?(*:3951)'
                            .')'
                        .')'
                        .'|fo(?'
                            .'|rgot\\-password(*:3981)'
                            .'|lder(?'
                                .'|(?:/([^/]++))?(*:4011)'
                                .'|/([^/]++)/articles(*:4038)'
                            .')'
                        .')'
                        .'|update\\-credentials(?:/([^/]++)(?:/([^/]++))?)?(*:4096)'
                        .'|c(?'
                            .'|ustomer/(?'
                                .'|log(?'
                                    .'|in(*:4128)'
                                    .'|out(*:4140)'
                                .')'
                                .'|a(?'
                                    .'|ccount(*:4160)'
                                    .'|ttachment/([^/]++)/view(*:4192)'
                                .')'
                                .'|t(?'
                                    .'|icket(?'
                                        .'|s(?'
                                            .'|(*:4218)'
                                            .'|/xhr(*:4231)'
                                        .')'
                                        .'|/(?'
                                            .'|view(?:/([^/]++))?(*:4263)'
                                            .'|rate(?:/([^/]++))?(*:4290)'
                                            .'|d(?'
                                                .'|raft\\-save(?:/([^/]++))?(*:4327)'
                                                .'|ownload(?'
                                                    .'|(?:/([^/]++))?(*:4360)'
                                                    .'|\\-ticket\\-zip(?:/([^/]++))?(*:4396)'
                                                .')'
                                            .')'
                                            .'|collaborator(?:/([^/]++))?(*:4433)'
                                            .'|success(?:/([^/]++)(?:/([^/]++))?)?(*:4477)'
                                        .')'
                                    .')'
                                    .'|hread(?'
                                        .'|s/ajax(?:/([^/]++))?(*:4516)'
                                        .'|/(?'
                                            .'|save(?:/([^/]++))?(*:4547)'
                                            .'|encoded\\-images/save/([^/]++)(*:4585)'
                                        .')'
                                    .')'
                                .')'
                                .'|create\\-ticket(*:4611)'
                                .'|search/article(?:/([^/]++))?(*:4648)'
                            .')'
                            .'|ategor(?'
                                .'|ies(*:4670)'
                                .'|y(?:/([^/]++))?(*:4694)'
                            .')'
                        .')'
                        .'|exception(*:4714)'
                        .'|article(?:/([^/]++))?(*:4744)'
                        .'|blog(?:/([^/]++))?(*:4771)'
                        .'|rating/([^/]++)(*:4795)'
                        .'|search(?:/([^/]++))?(*:4824)'
                        .'|tag(?:/([^/]++)(?:/([^/]++))?)?(*:4864)'
                    .')'
                    .'|(*:4874)'
                .')'
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
        205 => [[['_route' => 'helpdesk_member_handle_login', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        216 => [[['_route' => 'helpdesk_member_handle_logout', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        234 => [[['_route' => 'helpdesk_member_dashboard', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::loadDashboard', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        258 => [
            [['_route' => 'helpdesk_member_profile', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::loadProfile', '_locale' => 'en'], ['_locale'], null, null, false, false, null],
            [['_route' => 'edit_profile', 'panelId' => 'usersprofile', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\UserActivityController::editProfile', '_locale' => 'en'], ['_locale'], null, null, false, false, null],
        ],
        279 => [[['_route' => 'helpdesk_member_mailbox_direct_convert_mail', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::processRawContentMail', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        302 => [[['_route' => 'helpdesk_member_privilege_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Privilege::listPrivilege', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        314 => [[['_route' => 'helpdesk_member_privilege_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\PrivilegeXHR::listPrivilegeXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        335 => [[['_route' => 'helpdesk_member_update_privilege', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Privilege::editPrivilege', '_locale' => 'en'], ['_locale', 'supportPrivilegeId'], null, null, false, true, null]],
        367 => [[['_route' => 'helpdesk_member_remove_privilege_xhr', 'supportPrivilegeId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\PrivilegeXHR::deletePrivilegeXHR', '_locale' => 'en'], ['_locale', 'supportPrivilegeId'], null, null, false, true, null]],
        397 => [[['_route' => 'prepare_response_action', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponse::prepareResponseList', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        429 => [[['_route' => 'prepare_response_delete', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR::prepareResponseDeleteXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        444 => [[['_route' => 'prepare_response_list_xhr', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR::prepareResponseListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        454 => [[['_route' => 'prepare_response_addaction', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponse::createPrepareResponse', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        481 => [[['_route' => 'prepare_response_editaction', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponse::editPrepareResponse', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        535 => [[['_route' => 'helpdesk_member_prepared_response_action_options_xhr', 'entity' => 'default', 'event' => null, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR::getPreparedResponseActionOptionsXHR', '_locale' => 'en'], ['_locale', 'entity', 'event'], null, null, false, true, null]],
        575 => [[['_route' => 'helpdesk_member_account_xhr', 'agentId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AccountXHR::deleteAgent', '_locale' => 'en'], ['_locale', 'agentId'], null, null, false, true, null]],
        597 => [[['_route' => 'helpdesk_member_account', 'agentId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::editAgent', '_locale' => 'en'], ['_locale', 'agentId'], null, null, false, true, null]],
        609 => [[['_route' => 'helpdesk_member_account_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::listAgents', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        621 => [[['_route' => 'helpdesk_member_account_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AccountXHR::listAgentsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        647 => [[['_route' => 'helpdesk_member_agent_activity', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report::listAgentActivity', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        658 => [[['_route' => 'helpdesk_member_agent_activity_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report::agentActivityXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        674 => [[['_route' => 'uvdesk_extensions_applications_dashboard', 'panelId' => 'apps', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Dashboard::applications', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        696 => [[['_route' => 'uvdesk_extensions_applications_dashboard_xhr', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Dashboard::applicationsXHR', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        733 => [[['_route' => 'uvdesk_extensions_standalone_application_dashboard', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application::dashboard', '_locale' => 'en'], ['_locale', 'vendor', 'package', 'qualifiedName'], null, null, false, true, null]],
        748 => [[['_route' => 'uvdesk_extensions_standalone_application_api_endpoint', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application::apiEndpointXHR', '_locale' => 'en'], ['_locale', 'vendor', 'package', 'qualifiedName'], ['GET' => 0, 'POST' => 1, 'PUT' => 2, 'DELETE' => 3], null, false, false, null]],
        764 => [[['_route' => 'uvdesk_extensions_standalone_application_callback_endpoint', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application::callbackEndpointXHR', '_locale' => 'en'], ['_locale', 'vendor', 'package', 'qualifiedName'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        795 => [[['_route' => 'helpdesk_member_create_account', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::createAgent', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        808 => [[['_route' => 'helpdesk_member_create_support_group', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Group::createGroup', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        820 => [[['_route' => 'helpdesk_member_create_support_team', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Team::createTeam', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        837 => [[['_route' => 'helpdesk_member_create_privilege', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Privilege::createPrivilege', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        853 => [[['_route' => 'helpdesk_member_create_customer_account', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::createCustomer', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        876 => [[['_route' => 'helpdesk_member_manage_customer_account_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::listCustomers', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        888 => [[['_route' => 'helpdesk_member_manage_customer_account_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\CustomerXHR::listCustomersXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        910 => [[['_route' => 'helpdesk_member_bookmark_customer_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::bookmarkCustomer', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        932 => [[['_route' => 'helpdesk_member_manage_customer_account', 'customerId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::editCustomer', '_locale' => 'en'], ['_locale', 'customerId'], null, null, false, true, null]],
        958 => [[['_route' => 'helpdesk_member_remove_customer_account_xhr', 'customerId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\CustomerXHR::removeCustomerXHR', '_locale' => 'en'], ['_locale', 'customerId'], null, null, false, true, null]],
        981 => [[['_route' => 'helpdesk_member_cache_clear', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::clearProjectCache', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        997 => [[['_route' => 'helpdesk_member_knowledgebase_category_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryList', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1019 => [[['_route' => 'helpdesk_member_support_group_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Group::listGroups', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1032 => [[['_route' => 'helpdesk_member_support_group_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\GroupXHR::listGroupsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1054 => [[['_route' => 'helpdesk_member_update_support_group', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Group::editGroup', '_locale' => 'en'], ['_locale', 'supportGroupId'], null, null, false, true, null]],
        1087 => [[['_route' => 'helpdesk_member_remove_support_group_xhr', 'supportGroupId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\GroupXHR::deleteGroupXHR', '_locale' => 'en'], ['_locale', 'supportGroupId'], null, null, false, true, null]],
        1115 => [[['_route' => 'helpdesk_member_support_team_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Team::listTeams', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1128 => [[['_route' => 'helpdesk_member_support_team_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TeamXHR::listTeamsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1150 => [[['_route' => 'helpdesk_member_update_support_team', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Team::editTeam', '_locale' => 'en'], ['_locale', 'supportTeamId'], null, null, false, true, null]],
        1183 => [[['_route' => 'helpdesk_member_remove_support_team_xhr', 'supportTeamId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TeamXHR::deleteTeamXHR', '_locale' => 'en'], ['_locale', 'supportTeamId'], null, null, false, true, null]],
        1204 => [[['_route' => 'email_templates_action', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templates', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1233 => [[['_route' => 'email_templates_xhraction', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templatesxhr', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        1249 => [[['_route' => 'email_templates_addaction', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templateForm', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1276 => [[['_route' => 'email_templates_editaction', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templateForm', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        1304 => [[['_route' => 'helpdesk_member_helpdesk_theme', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Theme::updateHelpdeskTheme', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1346 => [[['_route' => 'helpdesk_member_thread_collection_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\ThreadXHR::listTicketThreadCollectionXHR', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1376 => [[['_route' => 'helpdesk_member_thread_xhr', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::threadXHR', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        1406 => [[['_route' => 'helpdesk_member_thread_update_xhr', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::updateThreadXHR', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        1449 => [[['_route' => 'helpdesk_member_thread_encoded_image_uploader', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::base64ImageUpload', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1475 => [[['_route' => 'helpdesk_member_add_ticket_thread', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::saveThread', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1499 => [[['_route' => 'helpdesk_member_ticket_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::listTicketCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1515 => [[['_route' => 'helpdesk_member_ticket_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::listTicketCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1533 => [[['_route' => 'helpdesk_member_ticket_collection_mass_action_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1557 => [[['_route' => 'helpdesk_member_ticket_collection_load_filter_options_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketFilterOptionsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1589 => [[['_route' => 'helpdesk_member_ticket_collection_search_filter_options_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketCollectionSearchFilterOptionsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1622 => [[['_route' => 'helpdesk_member_ticket', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::loadTicket', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1648 => [[['_route' => 'helpdesk_member_ticket_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketXHR', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1667 => [[['_route' => 'helpdesk_member_create_ticket', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::saveTicket', '_locale' => 'en'], ['_locale'], ['POST' => 0, 'PUT' => 1], null, false, false, null]],
        1705 => [[['_route' => 'helpdesk_member_ticket_saved_reply_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketSavedReplies', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        1740 => [
            [['_route' => 'search_ticket_filter_options_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::getSearchFilterOptionsXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null],
            [['_route' => 'helpdesk_member_ticket_search_filter_options', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketSearchFilterOptions', '_locale' => 'en'], ['_locale'], null, null, false, false, null],
        ],
        1765 => [[['_route' => 'helpdesk_member_trash_ticket', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::trashTicket', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1792 => [[['_route' => 'helpdesk_member_delete_ticket', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::deleteTicket', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1825 => [[['_route' => 'helpdesk_member_ticket_download_attachment', 'attachmendId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::downloadAttachment', '_locale' => 'en'], ['_locale', 'attachmendId'], null, null, false, true, null]],
        1853 => [[['_route' => 'helpdesk_member_ticket_download_attachment_zip', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::downloadZipAttachment', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        1878 => [[['_route' => 'helpdesk_member_ticket_add_label_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::saveTicketLabel', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1907 => [[['_route' => 'helpdesk_member_ticket_label_xhr', 'ticketLabelId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::ticketLabelXHR', '_locale' => 'en'], ['_locale', 'ticketLabelId'], null, null, false, true, null]],
        1929 => [[['_route' => 'helpdesk_member_bookmark_ticket_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::bookmarkTicketXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1964 => [[['_route' => 'helpdesk_member_update_ticket_details_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketDetails', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1997 => [[['_route' => 'helpdesk_member_update_ticket_attributes_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketAttributes', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        2033 => [[['_route' => 'helpdesk_member_ticket_manage_collaborators_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateCollaboratorXHR', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2067 => [[['_route' => 'helpdesk_member_ticket_quick_view_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::getTicketQuickViewDetailsXhr', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        2126 => [[['_route' => 'helpdesk_member_ticket_prepared_response_xhr', 'ticketId' => 0, 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::applyTicketPreparedResponseXHR', '_locale' => 'en'], ['_locale', 'ticketId', 'id'], null, null, false, true, null]],
        2146 => [[['_route' => 'helpdesk_member_ticket_type_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::listTicketTypeCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2162 => [[['_route' => 'helpdesk_member_ticket_type_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::listTicketTypeCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2177 => [[['_route' => 'helpdesk_member_create_ticket_type', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::ticketType', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2206 => [[['_route' => 'helpdesk_member_remove_ticket_type', 'typeId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::removeTicketTypeXHR', '_locale' => 'en'], ['_locale', 'typeId'], null, null, false, true, null]],
        2230 => [[['_route' => 'helpdesk_member_update_ticket_type', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::ticketType', '_locale' => 'en'], ['_locale', 'ticketTypeId'], null, null, false, true, null]],
        2263 => [[['_route' => 'access_token_xhr', '_controller' => 'CoreFrameworkBundle:Api:accessTokenXhr', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2310 => [[['_route' => 'helpdesk_member_saved_filters_xhr', 'filterId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AccountXHR::savedFiltersXHR', '_locale' => 'en'], ['_locale', 'filterId'], null, null, false, true, null]],
        2332 => [[['_route' => 'helpdesk_member_saved_replies', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::loadSavedReplies', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2359 => [[['_route' => 'helpdesk_member_saved_replies_xhr', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::savedRepliesXHR', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        2392 => [[['_route' => 'helpdesk_member_update_saved_replies', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::updateSavedReplies', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        2418 => [[['_route' => 'helpdesk_member_create_saved_replies', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::updateSavedReplies', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        2458 => [[['_route' => 'helpdesk_member_swiftmailer_settings', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailer::loadMailers', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2477 => [[['_route' => 'helpdesk_member_swiftmailer_load_configurations_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailerXHR::loadMailersXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2509 => [[['_route' => 'helpdesk_member_swiftmailer_remove_mailer_configuration_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailerXHR::removeMailerConfiguration', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2525 => [[['_route' => 'helpdesk_member_swiftmailer_create_mailer_configuration', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailer::createMailerConfiguration', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2549 => [[['_route' => 'helpdesk_member_swiftmailer_update_mailer_configuration', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailer::updateMailerConfiguration', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2574 => [[['_route' => 'helpdesk_member_emails_settings', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\EmailSettings::loadSettings', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2593 => [[['_route' => 'helpdesk_member_mailbox_settings', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannel::loadMailboxes', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2609 => [[['_route' => 'helpdesk_member_mailbox_load_configurations_xhr', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::loadMailboxesXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2624 => [[['_route' => 'helpdesk_member_mailbox_create_configuration', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannel::createMailboxConfiguration', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2653 => [[['_route' => 'helpdesk_member_mailbox_update_configuration', 'id' => '', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannel::updateMailboxConfiguration', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2682 => [[['_route' => 'helpdesk_member_mailbox_remove_configuration_xhr', 'id' => '', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::removeMailboxConfiguration', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2705 => [[['_route' => 'ajax_service_call', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxServiceCall', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2730 => [[['_route' => 'helpdesk_member_ticket_tag_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::listTagCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2746 => [[['_route' => 'helpdesk_member_ticket_tag_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::listTagCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2775 => [[['_route' => 'helpdesk_member_ticket_create_tag_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::createTicketTagXHR', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2804 => [[['_route' => 'helpdesk_member_update_ticket_tag_xhr', 'tagId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketTagXHR', '_locale' => 'en'], ['_locale', 'tagId'], null, null, false, true, null]],
        2833 => [[['_route' => 'helpdesk_member_remove_ticket_tag_xhr', 'tagId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::removeTicketTagXHR', '_locale' => 'en'], ['_locale', 'tagId'], null, null, false, true, null]],
        2870 => [[['_route' => 'helpdesk_member_update_emails_settings_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\EmailSettingsXHR::updateSettingsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2902 => [[['_route' => 'helpdesk_report_achievements_insight_action', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report::achievementInsightsAction', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2917 => [[['_route' => 'helpdesk_report_achievements_data_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report::getAchievementsXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2942 => [[['_route' => 'helpdesk_member_workflow_collection', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\Workflow::listWorkflowCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2955 => [[['_route' => 'workflowslist_xhr', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::workflowsListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2972 => [[['_route' => 'workflows_addaction', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\Workflow::createWorkflow', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2994 => [[['_route' => 'workflows_editaction', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\Workflow::editWorkflow', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3041 => [[['_route' => 'helpdesk_member_workflow_condition_options_xhr', 'entity' => 'default', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::getWorkflowConditionOptionsXHR', '_locale' => 'en'], ['_locale', 'entity'], null, null, false, true, null]],
        3092 => [[['_route' => 'helpdesk_member_workflow_action_options_xhr', 'entity' => 'default', 'event' => null, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::getWorkflowActionOptionsXHR', '_locale' => 'en'], ['_locale', 'entity', 'event'], null, null, false, true, null]],
        3123 => [[['_route' => 'workflows_xhraction', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::WorkflowsxhrAction', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3148 => [[['_route' => 'ajax_file_upload', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxFileUpload', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3163 => [[['_route' => 'ajax_file_remove', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxFileRemove', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3184 => [[['_route' => 'ajax_url_file', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxUrlFileUpload', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3217 => [[['_route' => 'helpdesk_member_knowledgebase_folders_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Folder::listFolders', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3233 => [[['_route' => 'helpdesk_member_knowledgebase_folders_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\KnowledgebaseXHR::listFoldersXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3245 => [[['_route' => 'helpdesk_member_knowledgebase_create_folder', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Folder::createFolder', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3277 => [[['_route' => 'helpdesk_member_knowledgebase_update_folder', 'folderId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Folder::updateFolder', '_locale' => 'en'], ['_locale', 'folderId'], null, null, false, true, null]],
        3304 => [[['_route' => 'helpdesk_member_knowledgebase_update_folder_xhr', 'folderId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\KnowledgebaseXHR::updateFolderXHR', '_locale' => 'en'], ['_locale', 'folderId'], null, null, false, true, null]],
        3335 => [[['_route' => 'helpdesk_member_knowledgebase_folder_categories_collection', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryListBySolution', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        3359 => [[['_route' => 'helpdesk_member_knowledgebase_category_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3392 => [[['_route' => 'helpdesk_member_knowledgebase_folder_categories_collection_xhr', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryListXhr', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        3419 => [[['_route' => 'helpdesk_member_knowledgebase_create_category', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::Category', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3445 => [[['_route' => 'helpdesk_member_knowledgebase_update_category_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3473 => [[['_route' => 'helpdesk_member_knowledgebase_update_category', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::Category', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3491 => [[['_route' => 'helpdesk_member_knowledgebase_article_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleList', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3517 => [[['_route' => 'helpdesk_member_knowledgebase_category_articles_collection', 'category' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListByCategory', '_locale' => 'en'], ['_locale', 'category'], null, null, false, false, null]],
        3555 => [[['_route' => 'helpdesk_member_knowledgebase_folder_articles_collection', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListBySolution', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        3569 => [[['_route' => 'helpdesk_member_knowledgebase_folder_articles_collection_xhr', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListXhr', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        3598 => [[['_route' => 'helpdesk_member_knowledgebase_article_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3617 => [[['_route' => 'helpdesk_member_knowledgebase_create_article', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::Article', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3643 => [[['_route' => 'helpdesk_member_knowledgebase_update_article_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3671 => [[['_route' => 'helpdesk_member_knowledgebase_update_article', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::Article', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3702 => [[['_route' => 'helpdesk_member_knowledgebase_revision_article', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::articleHistoryXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3732 => [[['_route' => 'helpdesk_member_knowledgebase_related_article_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::articleRelatedXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3761 => [[['_route' => 'helpdesk_member_knowledgebase_marketing_announcement', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::listAnnouncement', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3773 => [[['_route' => 'helpdesk_member_knowledgebase_marketing_announcement_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::listAnnouncementXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3818 => [[['_route' => 'helpdesk_member_knowledgebase_theme', 'type' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Branding::theme', '_locale' => 'en'], ['_locale', 'type'], null, null, false, true, null]],
        3831 => [[['_route' => 'helpdesk_member_knowledgebase_update_theme_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Branding::BrandingXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3850 => [[['_route' => 'helpdesk_member_knowledgebase_spam', 'type' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Branding::spam', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3893 => [[['_route' => 'helpdesk_member_knowledgebase_create_marketing_announcement', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::updateAnnouncement', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3922 => [[['_route' => 'helpdesk_member_knowledgebase_update_marketing_announcement', 'announcementId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::updateAnnouncement', '_locale' => 'en'], ['_locale', 'announcementId'], null, null, false, true, null]],
        3951 => [[['_route' => 'helpdesk_member_knowledgebase_remove_marketing_announcement_xhr', 'announcementId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::removeAnnouncementXHR', '_locale' => 'en'], ['_locale', 'announcementId'], null, null, false, true, null]],
        3981 => [[['_route' => 'helpdesk_forgot_account_password', '_locale' => 'en', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::forgotPassword'], ['_locale'], null, null, false, false, null]],
        4011 => [[['_route' => 'helpdesk_knowledgebase_folder', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewFolder', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, true, null]],
        4038 => [[['_route' => 'helpdesk_knowledgebase_folder_article_collection', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewFolderArticle', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        4096 => [[['_route' => 'helpdesk_update_account_credentials', '_locale' => 'en', 'email' => '', 'verificationCode' => '', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::updateCredentials'], ['_locale', 'email', 'verificationCode'], null, null, false, true, null]],
        4128 => [[['_route' => 'helpdesk_customer_login', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4140 => [[['_route' => 'helpdesk_customer_logout', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4160 => [[['_route' => 'helpdesk_customer_account', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::Account', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4192 => [[['_route' => 'helpdesk_customer_view_ticket_attachment', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AttachmentViewer::attachmentView', '_locale' => 'en'], ['_locale', 'id'], null, null, false, false, null]],
        4218 => [[['_route' => 'helpdesk_customer_ticket_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::Tickets', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4231 => [[['_route' => 'helpdesk_customer_ticket_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4263 => [[['_route' => 'helpdesk_customer_ticket', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketView', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4290 => [[['_route' => 'helpdesk_customer_rate_ticket', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::rateTicket', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4327 => [[['_route' => 'helpdesk_customer_save_ticket_draft', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::saveDraft', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4360 => [[['_route' => 'helpdesk_customer_download_ticket_attachment', 'attachmendId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::downloadAttachment', '_locale' => 'en'], ['_locale', 'attachmendId'], null, null, false, true, null]],
        4396 => [[['_route' => 'helpdesk_customer_download_ticket_attachment_zip', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::downloadAttachmentZip', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        4433 => [[['_route' => 'helpdesk_customer_update_ticket_collaborators_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketCollaboratorXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4477 => [[['_route' => 'helpdesk_customer_create_ticket_success', 'email' => '', 'flag' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketSuccess', '_locale' => 'en'], ['_locale', 'email', 'flag'], null, null, false, true, null]],
        4516 => [[['_route' => 'helpdesk_customer_thread_collection_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::threadListXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4547 => [[['_route' => 'helpdesk_customer_add_ticket_thread', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::saveReply', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4585 => [[['_route' => 'helpdesk_customer_upload_thread_encoded_image', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::base64ImageUpload', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        4611 => [[['_route' => 'helpdesk_customer_create_ticket', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketAdd', '_locale' => 'en'], ['_locale'], null, null, true, false, null]],
        4648 => [[['_route' => 'helpdesk_customer_front_article_search', 's' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::searchArticle', '_locale' => 'en'], ['_locale', 's'], null, null, false, true, null]],
        4670 => [[['_route' => 'helpdesk_knowledgebase_category_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::listCategories', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4694 => [[['_route' => 'helpdesk_knowledgebase_category', 'category' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewCategory', '_locale' => 'en'], ['_locale', 'category'], null, null, false, true, null]],
        4714 => [[['_route' => 'helpdesk_knowledgebase_exception', '_controller' => 'WebkulDefaultBundle:Default:exceptionDefault', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4744 => [[['_route' => 'helpdesk_knowledgebase_read_article', 'article' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewArticle', '_locale' => 'en'], ['_locale', 'article'], null, null, false, true, null]],
        4771 => [[['_route' => 'helpdesk_knowledgebase_read_slug_article', 'slug' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewArticle', '_locale' => 'en'], ['_locale', 'slug'], null, null, false, true, null]],
        4795 => [[['_route' => 'helpdesk_knowledgebase_rate_article', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::rateArticle', '_locale' => 'en'], ['_locale', 'articleId'], null, null, false, true, null]],
        4824 => [[['_route' => 'helpdesk_knowledgebase_search', 's' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::searchKnowledgebase', '_locale' => 'en'], ['_locale', 's'], null, null, false, true, null]],
        4864 => [[['_route' => 'helpdesk_knowledgebase_tag', 'tag' => '', 'name' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewTaggedResources', '_locale' => 'en'], ['_locale', 'tag', 'name'], null, null, false, true, null]],
        4874 => [
            [['_route' => 'helpdesk_knowledgebase', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::home', '_locale' => 'en'], ['_locale'], null, null, true, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
