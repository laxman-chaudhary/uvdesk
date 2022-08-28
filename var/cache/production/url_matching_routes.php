<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'base_route', '_controller' => 'App\\Controller\\BaseController::base'], null, null, null, false, false, null]],
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
                .'|/(en|fr|it)(?'
                    .'|/(?'
                        .'|member/(?'
                            .'|log(?'
                                .'|in(*:43)'
                                .'|out(*:53)'
                            .')'
                            .'|dashboard(*:70)'
                            .'|pr(?'
                                .'|o(?'
                                    .'|file(?'
                                        .'|(*:93)'
                                    .')'
                                    .'|cessRawEmail(*:113)'
                                .')'
                                .'|ivilege(?'
                                    .'|s(?'
                                        .'|(*:136)'
                                        .'|/xhr(*:148)'
                                    .')'
                                    .'|/(?'
                                        .'|([^/]++)(*:169)'
                                        .'|delete/xhr(?:/([^/]++))?(*:201)'
                                    .')'
                                .')'
                                .'|epared\\-responses(?'
                                    .'|(*:231)'
                                    .'|/(?'
                                        .'|delete(?:/([^/]++))?(*:263)'
                                        .'|a(?'
                                            .'|jax(*:278)'
                                            .'|dd(*:288)'
                                        .')'
                                        .'|edit(?:/([^/]++))?(*:315)'
                                        .'|xhr/action/options(?:/([^/]++)(?:/([^/]++))?)?(*:369)'
                                    .')'
                                .')'
                            .')'
                            .'|a(?'
                                .'|gent(?'
                                    .'|/xhr(?:/([^/]++))?(*:409)'
                                    .'|(?:/([^/]++))?(*:431)'
                                    .'|s(?'
                                        .'|(*:443)'
                                        .'|/xhr(*:455)'
                                    .')'
                                    .'|/activity/(?'
                                        .'|list(*:481)'
                                        .'|xhr(*:492)'
                                    .')'
                                .')'
                                .'|pps(?'
                                    .'|(*:508)'
                                    .'|/(?'
                                        .'|collection(*:530)'
                                        .'|([^/]++)/([^/]++)/([^/]++)(?'
                                            .'|(*:567)'
                                            .'|/(?'
                                                .'|api(*:582)'
                                                .'|callback(*:598)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|c(?'
                                .'|reate/(?'
                                    .'|agent(*:629)'
                                    .'|group(*:642)'
                                    .'|team(*:654)'
                                    .'|privilege(*:671)'
                                    .'|customer(*:687)'
                                .')'
                                .'|ustomer(?'
                                    .'|s(?'
                                        .'|(*:710)'
                                        .'|/xhr(*:722)'
                                    .')'
                                    .'|/update\\-star(*:744)'
                                    .'|(?:/([^/]++))?(*:766)'
                                    .'|/xhr(?:/([^/]++))?(*:792)'
                                .')'
                                .'|a(?'
                                    .'|che\\-clear(*:815)'
                                    .'|tegories(*:831)'
                                .')'
                            .')'
                            .'|group(?'
                                .'|s(?'
                                    .'|(*:853)'
                                    .'|/xhr(*:865)'
                                .')'
                                .'|/(?'
                                    .'|([^/]++)(*:886)'
                                    .'|delete/xhr(?:/([^/]++))?(*:918)'
                                .')'
                            .')'
                            .'|t(?'
                                .'|e(?'
                                    .'|am(?'
                                        .'|s(?'
                                            .'|(*:945)'
                                            .'|/xhr(*:957)'
                                        .')'
                                        .'|/(?'
                                            .'|([^/]++)(*:978)'
                                            .'|delete/xhr(?:/([^/]++))?(*:1010)'
                                        .')'
                                    .')'
                                    .'|mplate(?'
                                        .'|s(*:1031)'
                                        .'|\\-ajax(?:/([^/]++))?(*:1060)'
                                        .'|/(?'
                                            .'|add(*:1076)'
                                            .'|edit(?:/([^/]++))?(*:1103)'
                                        .')'
                                    .')'
                                .')'
                                .'|h(?'
                                    .'|eme/helpdesk(*:1131)'
                                    .'|read(?'
                                        .'|s/(?'
                                            .'|ajax(?'
                                                .'|(?:/([^/]++))?(*:1173)'
                                                .'|/action(?:/([^/]++))?(*:1203)'
                                            .')'
                                            .'|update(?:/([^/]++))?(*:1233)'
                                        .')'
                                        .'|/(?'
                                            .'|encoded\\-images/save/([^/]++)(*:1276)'
                                            .'|add(?:/([^/]++))?(*:1302)'
                                        .')'
                                    .')'
                                .')'
                                .'|icket(?'
                                    .'|s(?'
                                        .'|(*:1326)'
                                        .'|/(?'
                                            .'|xhr(*:1342)'
                                            .'|mass\\-xhr(*:1360)'
                                            .'|filter\\-options(*:1384)'
                                            .'|search\\-filter\\-options(*:1416)'
                                        .')'
                                    .')'
                                    .'|/(?'
                                        .'|view(?:/([^/]++))?(*:1449)'
                                        .'|xhr(?:/([^/]++))?(*:1475)'
                                        .'|s(?'
                                            .'|ave(?'
                                                .'|(*:1494)'
                                                .'|d\\-reply\\-apply(?:/([^/]++))?(*:1532)'
                                            .')'
                                            .'|earch\\-filter\\-options(?'
                                                .'|(*:1567)'
                                            .')'
                                        .')'
                                        .'|trash/([^/]++)(*:1592)'
                                        .'|d(?'
                                            .'|elete/([^/]++)(*:1619)'
                                            .'|ownload(?'
                                                .'|(?:/([^/]++))?(*:1652)'
                                                .'|\\-zip(?:/([^/]++))?(*:1680)'
                                            .')'
                                        .')'
                                        .'|labels/(?'
                                            .'|save(*:1705)'
                                            .'|update(?:/([^/]++))?(*:1734)'
                                        .')'
                                        .'|bookmark/xhr(*:1756)'
                                        .'|update/(?'
                                            .'|details/([^/]++)(*:1791)'
                                            .'|attributes(?:/([^/]++))?(*:1824)'
                                        .')'
                                        .'|collaborator(?:/([^/]++))?(*:1860)'
                                        .'|quick\\-view(?:/([^/]++))?(*:1894)'
                                        .'|prepared\\-response/xhr(?:/([^/]++)(?:/([^/]++))?)?(*:1953)'
                                    .')'
                                    .'|\\-types(?'
                                        .'|(*:1973)'
                                        .'|/(?'
                                            .'|xhr(*:1989)'
                                            .'|create(*:2004)'
                                            .'|remove(?:/([^/]++))?(*:2033)'
                                            .'|update/([^/]++)(*:2057)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|member/access\\-token(*:2090)'
                            .'|s(?'
                                .'|aved\\-(?'
                                    .'|filter\\-xhr(?:/([^/]++))?(*:2137)'
                                    .'|repl(?'
                                        .'|ies(?'
                                            .'|(*:2159)'
                                            .'|/xhr(?:/([^/]++))?(*:2186)'
                                        .')'
                                        .'|y/(?'
                                            .'|edit(?:/([^/]++))?(*:2219)'
                                            .'|add(?:/([^/]++))?(*:2245)'
                                        .')'
                                    .')'
                                .')'
                                .'|e(?'
                                    .'|ttings/(?'
                                        .'|swiftmailer(?'
                                            .'|(*:2285)'
                                            .'|/(?'
                                                .'|xhr(?'
                                                    .'|(*:2304)'
                                                    .'|/remove\\-configurations(*:2336)'
                                                .')'
                                                .'|create(*:2352)'
                                                .'|update/([^/]++)(*:2376)'
                                            .')'
                                        .')'
                                        .'|email/settings(*:2401)'
                                        .'|mailbox(?'
                                            .'|(*:2420)'
                                            .'|/(?'
                                                .'|xhr(*:2436)'
                                                .'|create(*:2451)'
                                                .'|update(?:/([^/]++))?(*:2480)'
                                                .'|remove(?:/([^/]++))?(*:2509)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|rvice\\-call(*:2532)'
                                .')'
                                .'|upport\\-tags(?'
                                    .'|(*:2557)'
                                    .'|/(?'
                                        .'|xhr(*:2573)'
                                        .'|create(?:/([^/]++))?(*:2602)'
                                        .'|update(?:/([^/]++))?(*:2631)'
                                        .'|remove(?:/([^/]++))?(*:2660)'
                                    .')'
                                .')'
                            .')'
                            .'|email/xhr/settings_update(*:2697)'
                            .'|reports/achievements(?'
                                .'|(*:2729)'
                                .'|\\-data(*:2744)'
                            .')'
                            .'|workflow(?'
                                .'|s(?'
                                    .'|(*:2769)'
                                    .'|/xhr(*:2782)'
                                .')'
                                .'|/(?'
                                    .'|add(*:2799)'
                                    .'|edit/([^/]++)(*:2821)'
                                    .'|xhr/(?'
                                        .'|condition/options(?:/([^/]++))?(*:2868)'
                                        .'|action/options(?:/([^/]++)(?:/([^/]++))?)?(*:2919)'
                                    .')'
                                .')'
                                .'|\\-ajax(?:/([^/]++))?(*:2950)'
                            .')'
                            .'|file\\-(?'
                                .'|upload(*:2975)'
                                .'|remove(*:2990)'
                            .')'
                            .'|url\\-upload(*:3011)'
                            .'|knowledgebase/folders(?'
                                .'|(*:3044)'
                                .'|/(?'
                                    .'|xhr(*:3060)'
                                    .'|new(*:3072)'
                                    .'|update(?'
                                        .'|(?:/([^/]++))?(*:3104)'
                                        .'|/xhr(?:/([^/]++))?(*:3131)'
                                    .')'
                                .')'
                            .')'
                            .'|([^/]++)/categories(*:3162)'
                            .'|categories/ajax(*:3186)'
                            .'|([^/]++)/categories/ajax(*:3219)'
                            .'|category/(?'
                                .'|a(?'
                                    .'|dd(*:3246)'
                                    .'|jax(?:/([^/]++))?(*:3272)'
                                .')'
                                .'|edit(?:/([^/]++))?(*:3300)'
                            .')'
                            .'|articles(*:3318)'
                            .'|([^/]++)/articles(*:3344)'
                            .'|solution/([^/]++)/articles(?'
                                .'|(*:3382)'
                                .'|/ajax(*:3396)'
                            .')'
                            .'|a(?'
                                .'|rticle(?'
                                    .'|s/ajax(*:3425)'
                                    .'|/(?'
                                        .'|a(?'
                                            .'|dd(*:3444)'
                                            .'|jax(?:/([^/]++))?(*:3470)'
                                        .')'
                                        .'|edit(?:/([^/]++))?(*:3498)'
                                    .')'
                                    .'|History(?:/([^/]++))?(*:3529)'
                                    .'|Related(?:/([^/]++))?(*:3559)'
                                .')'
                                .'|nnouncement/(?'
                                    .'|list(*:3588)'
                                    .'|xhr(*:3600)'
                                .')'
                            .')'
                            .'|b(?'
                                .'|randing/(?'
                                    .'|theme(?:/([^/]++))?(*:3645)'
                                    .'|ajax(*:3658)'
                                .')'
                                .'|lock/spam(*:3677)'
                            .')'
                            .'|knowledgebase/announcement/(?'
                                .'|new(*:3720)'
                                .'|update(?:/([^/]++))?(*:3749)'
                                .'|remove(?:/([^/]++))?(*:3778)'
                            .')'
                        .')'
                        .'|fo(?'
                            .'|rgot\\-password(*:3808)'
                            .'|lder(?'
                                .'|(?:/([^/]++))?(*:3838)'
                                .'|/([^/]++)/articles(*:3865)'
                            .')'
                        .')'
                        .'|update\\-credentials(?:/([^/]++)(?:/([^/]++))?)?(*:3923)'
                        .'|c(?'
                            .'|ustomer/(?'
                                .'|log(?'
                                    .'|in(*:3955)'
                                    .'|out(*:3967)'
                                .')'
                                .'|a(?'
                                    .'|ccount(*:3987)'
                                    .'|ttachment/([^/]++)/view(*:4019)'
                                .')'
                                .'|t(?'
                                    .'|icket(?'
                                        .'|s(?'
                                            .'|(*:4045)'
                                            .'|/xhr(*:4058)'
                                        .')'
                                        .'|/(?'
                                            .'|view(?:/([^/]++))?(*:4090)'
                                            .'|rate(?:/([^/]++))?(*:4117)'
                                            .'|d(?'
                                                .'|raft\\-save(?:/([^/]++))?(*:4154)'
                                                .'|ownload(?'
                                                    .'|(?:/([^/]++))?(*:4187)'
                                                    .'|\\-ticket\\-zip(?:/([^/]++))?(*:4223)'
                                                .')'
                                            .')'
                                            .'|collaborator(?:/([^/]++))?(*:4260)'
                                            .'|success(?:/([^/]++)(?:/([^/]++))?)?(*:4304)'
                                        .')'
                                    .')'
                                    .'|hread(?'
                                        .'|s/ajax(?:/([^/]++))?(*:4343)'
                                        .'|/(?'
                                            .'|save(?:/([^/]++))?(*:4374)'
                                            .'|encoded\\-images/save/([^/]++)(*:4412)'
                                        .')'
                                    .')'
                                .')'
                                .'|create\\-ticket(*:4438)'
                                .'|search/article(?:/([^/]++))?(*:4475)'
                            .')'
                            .'|ategor(?'
                                .'|ies(*:4497)'
                                .'|y(?:/([^/]++))?(*:4521)'
                            .')'
                        .')'
                        .'|exception(*:4541)'
                        .'|article(?:/([^/]++))?(*:4571)'
                        .'|blog(?:/([^/]++))?(*:4598)'
                        .'|rating/([^/]++)(*:4622)'
                        .'|search(?:/([^/]++))?(*:4651)'
                        .'|tag(?:/([^/]++)(?:/([^/]++))?)?(*:4691)'
                    .')'
                    .'|(*:4701)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'helpdesk_member_handle_login', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        53 => [[['_route' => 'helpdesk_member_handle_logout', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        70 => [[['_route' => 'helpdesk_member_dashboard', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::loadDashboard', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        93 => [
            [['_route' => 'helpdesk_member_profile', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::loadProfile', '_locale' => 'en'], ['_locale'], null, null, false, false, null],
            [['_route' => 'edit_profile', 'panelId' => 'usersprofile', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\UserActivityController::editProfile', '_locale' => 'en'], ['_locale'], null, null, false, false, null],
        ],
        113 => [[['_route' => 'helpdesk_member_mailbox_direct_convert_mail', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::processRawContentMail', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        136 => [[['_route' => 'helpdesk_member_privilege_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Privilege::listPrivilege', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        148 => [[['_route' => 'helpdesk_member_privilege_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\PrivilegeXHR::listPrivilegeXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        169 => [[['_route' => 'helpdesk_member_update_privilege', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Privilege::editPrivilege', '_locale' => 'en'], ['_locale', 'supportPrivilegeId'], null, null, false, true, null]],
        201 => [[['_route' => 'helpdesk_member_remove_privilege_xhr', 'supportPrivilegeId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\PrivilegeXHR::deletePrivilegeXHR', '_locale' => 'en'], ['_locale', 'supportPrivilegeId'], null, null, false, true, null]],
        231 => [[['_route' => 'prepare_response_action', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponse::prepareResponseList', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        263 => [[['_route' => 'prepare_response_delete', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR::prepareResponseDeleteXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        278 => [[['_route' => 'prepare_response_list_xhr', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR::prepareResponseListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        288 => [[['_route' => 'prepare_response_addaction', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponse::createPrepareResponse', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        315 => [[['_route' => 'prepare_response_editaction', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponse::editPrepareResponse', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        369 => [[['_route' => 'helpdesk_member_prepared_response_action_options_xhr', 'entity' => 'default', 'event' => null, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR::getPreparedResponseActionOptionsXHR', '_locale' => 'en'], ['_locale', 'entity', 'event'], null, null, false, true, null]],
        409 => [[['_route' => 'helpdesk_member_account_xhr', 'agentId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AccountXHR::deleteAgent', '_locale' => 'en'], ['_locale', 'agentId'], null, null, false, true, null]],
        431 => [[['_route' => 'helpdesk_member_account', 'agentId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::editAgent', '_locale' => 'en'], ['_locale', 'agentId'], null, null, false, true, null]],
        443 => [[['_route' => 'helpdesk_member_account_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::listAgents', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        455 => [[['_route' => 'helpdesk_member_account_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AccountXHR::listAgentsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        481 => [[['_route' => 'helpdesk_member_agent_activity', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report::listAgentActivity', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        492 => [[['_route' => 'helpdesk_member_agent_activity_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report::agentActivityXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        508 => [[['_route' => 'uvdesk_extensions_applications_dashboard', 'panelId' => 'apps', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Dashboard::applications', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        530 => [[['_route' => 'uvdesk_extensions_applications_dashboard_xhr', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Dashboard::applicationsXHR', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        567 => [[['_route' => 'uvdesk_extensions_standalone_application_dashboard', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application::dashboard', '_locale' => 'en'], ['_locale', 'vendor', 'package', 'qualifiedName'], null, null, false, true, null]],
        582 => [[['_route' => 'uvdesk_extensions_standalone_application_api_endpoint', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application::apiEndpointXHR', '_locale' => 'en'], ['_locale', 'vendor', 'package', 'qualifiedName'], ['GET' => 0, 'POST' => 1, 'PUT' => 2, 'DELETE' => 3], null, false, false, null]],
        598 => [[['_route' => 'uvdesk_extensions_standalone_application_callback_endpoint', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application::callbackEndpointXHR', '_locale' => 'en'], ['_locale', 'vendor', 'package', 'qualifiedName'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        629 => [[['_route' => 'helpdesk_member_create_account', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::createAgent', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        642 => [[['_route' => 'helpdesk_member_create_support_group', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Group::createGroup', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        654 => [[['_route' => 'helpdesk_member_create_support_team', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Team::createTeam', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        671 => [[['_route' => 'helpdesk_member_create_privilege', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Privilege::createPrivilege', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        687 => [[['_route' => 'helpdesk_member_create_customer_account', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::createCustomer', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        710 => [[['_route' => 'helpdesk_member_manage_customer_account_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::listCustomers', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        722 => [[['_route' => 'helpdesk_member_manage_customer_account_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\CustomerXHR::listCustomersXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        744 => [[['_route' => 'helpdesk_member_bookmark_customer_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::bookmarkCustomer', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        766 => [[['_route' => 'helpdesk_member_manage_customer_account', 'customerId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::editCustomer', '_locale' => 'en'], ['_locale', 'customerId'], null, null, false, true, null]],
        792 => [[['_route' => 'helpdesk_member_remove_customer_account_xhr', 'customerId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\CustomerXHR::removeCustomerXHR', '_locale' => 'en'], ['_locale', 'customerId'], null, null, false, true, null]],
        815 => [[['_route' => 'helpdesk_member_cache_clear', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::clearProjectCache', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        831 => [[['_route' => 'helpdesk_member_knowledgebase_category_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryList', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        853 => [[['_route' => 'helpdesk_member_support_group_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Group::listGroups', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        865 => [[['_route' => 'helpdesk_member_support_group_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\GroupXHR::listGroupsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        886 => [[['_route' => 'helpdesk_member_update_support_group', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Group::editGroup', '_locale' => 'en'], ['_locale', 'supportGroupId'], null, null, false, true, null]],
        918 => [[['_route' => 'helpdesk_member_remove_support_group_xhr', 'supportGroupId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\GroupXHR::deleteGroupXHR', '_locale' => 'en'], ['_locale', 'supportGroupId'], null, null, false, true, null]],
        945 => [[['_route' => 'helpdesk_member_support_team_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Team::listTeams', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        957 => [[['_route' => 'helpdesk_member_support_team_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TeamXHR::listTeamsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        978 => [[['_route' => 'helpdesk_member_update_support_team', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Team::editTeam', '_locale' => 'en'], ['_locale', 'supportTeamId'], null, null, false, true, null]],
        1010 => [[['_route' => 'helpdesk_member_remove_support_team_xhr', 'supportTeamId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TeamXHR::deleteTeamXHR', '_locale' => 'en'], ['_locale', 'supportTeamId'], null, null, false, true, null]],
        1031 => [[['_route' => 'email_templates_action', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templates', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1060 => [[['_route' => 'email_templates_xhraction', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templatesxhr', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        1076 => [[['_route' => 'email_templates_addaction', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templateForm', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1103 => [[['_route' => 'email_templates_editaction', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templateForm', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        1131 => [[['_route' => 'helpdesk_member_helpdesk_theme', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Theme::updateHelpdeskTheme', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1173 => [[['_route' => 'helpdesk_member_thread_collection_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\ThreadXHR::listTicketThreadCollectionXHR', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1203 => [[['_route' => 'helpdesk_member_thread_xhr', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::threadXHR', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        1233 => [[['_route' => 'helpdesk_member_thread_update_xhr', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::updateThreadXHR', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        1276 => [[['_route' => 'helpdesk_member_thread_encoded_image_uploader', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::base64ImageUpload', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1302 => [[['_route' => 'helpdesk_member_add_ticket_thread', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::saveThread', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1326 => [[['_route' => 'helpdesk_member_ticket_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::listTicketCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1342 => [[['_route' => 'helpdesk_member_ticket_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::listTicketCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1360 => [[['_route' => 'helpdesk_member_ticket_collection_mass_action_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1384 => [[['_route' => 'helpdesk_member_ticket_collection_load_filter_options_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketFilterOptionsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1416 => [[['_route' => 'helpdesk_member_ticket_collection_search_filter_options_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketCollectionSearchFilterOptionsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1449 => [[['_route' => 'helpdesk_member_ticket', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::loadTicket', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1475 => [[['_route' => 'helpdesk_member_ticket_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketXHR', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1494 => [[['_route' => 'helpdesk_member_create_ticket', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::saveTicket', '_locale' => 'en'], ['_locale'], ['POST' => 0, 'PUT' => 1], null, false, false, null]],
        1532 => [[['_route' => 'helpdesk_member_ticket_saved_reply_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketSavedReplies', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        1567 => [
            [['_route' => 'search_ticket_filter_options_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::getSearchFilterOptionsXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null],
            [['_route' => 'helpdesk_member_ticket_search_filter_options', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketSearchFilterOptions', '_locale' => 'en'], ['_locale'], null, null, false, false, null],
        ],
        1592 => [[['_route' => 'helpdesk_member_trash_ticket', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::trashTicket', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1619 => [[['_route' => 'helpdesk_member_delete_ticket', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::deleteTicket', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1652 => [[['_route' => 'helpdesk_member_ticket_download_attachment', 'attachmendId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::downloadAttachment', '_locale' => 'en'], ['_locale', 'attachmendId'], null, null, false, true, null]],
        1680 => [[['_route' => 'helpdesk_member_ticket_download_attachment_zip', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::downloadZipAttachment', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        1705 => [[['_route' => 'helpdesk_member_ticket_add_label_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::saveTicketLabel', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1734 => [[['_route' => 'helpdesk_member_ticket_label_xhr', 'ticketLabelId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::ticketLabelXHR', '_locale' => 'en'], ['_locale', 'ticketLabelId'], null, null, false, true, null]],
        1756 => [[['_route' => 'helpdesk_member_bookmark_ticket_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::bookmarkTicketXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1791 => [[['_route' => 'helpdesk_member_update_ticket_details_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketDetails', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1824 => [[['_route' => 'helpdesk_member_update_ticket_attributes_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketAttributes', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1860 => [[['_route' => 'helpdesk_member_ticket_manage_collaborators_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateCollaboratorXHR', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        1894 => [[['_route' => 'helpdesk_member_ticket_quick_view_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::getTicketQuickViewDetailsXhr', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1953 => [[['_route' => 'helpdesk_member_ticket_prepared_response_xhr', 'ticketId' => 0, 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::applyTicketPreparedResponseXHR', '_locale' => 'en'], ['_locale', 'ticketId', 'id'], null, null, false, true, null]],
        1973 => [[['_route' => 'helpdesk_member_ticket_type_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::listTicketTypeCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1989 => [[['_route' => 'helpdesk_member_ticket_type_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::listTicketTypeCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2004 => [[['_route' => 'helpdesk_member_create_ticket_type', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::ticketType', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2033 => [[['_route' => 'helpdesk_member_remove_ticket_type', 'typeId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::removeTicketTypeXHR', '_locale' => 'en'], ['_locale', 'typeId'], null, null, false, true, null]],
        2057 => [[['_route' => 'helpdesk_member_update_ticket_type', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::ticketType', '_locale' => 'en'], ['_locale', 'ticketTypeId'], null, null, false, true, null]],
        2090 => [[['_route' => 'access_token_xhr', '_controller' => 'CoreFrameworkBundle:Api:accessTokenXhr', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2137 => [[['_route' => 'helpdesk_member_saved_filters_xhr', 'filterId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AccountXHR::savedFiltersXHR', '_locale' => 'en'], ['_locale', 'filterId'], null, null, false, true, null]],
        2159 => [[['_route' => 'helpdesk_member_saved_replies', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::loadSavedReplies', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2186 => [[['_route' => 'helpdesk_member_saved_replies_xhr', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::savedRepliesXHR', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        2219 => [[['_route' => 'helpdesk_member_update_saved_replies', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::updateSavedReplies', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        2245 => [[['_route' => 'helpdesk_member_create_saved_replies', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::updateSavedReplies', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        2285 => [[['_route' => 'helpdesk_member_swiftmailer_settings', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailer::loadMailers', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2304 => [[['_route' => 'helpdesk_member_swiftmailer_load_configurations_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailerXHR::loadMailersXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2336 => [[['_route' => 'helpdesk_member_swiftmailer_remove_mailer_configuration_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailerXHR::removeMailerConfiguration', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2352 => [[['_route' => 'helpdesk_member_swiftmailer_create_mailer_configuration', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailer::createMailerConfiguration', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2376 => [[['_route' => 'helpdesk_member_swiftmailer_update_mailer_configuration', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailer::updateMailerConfiguration', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2401 => [[['_route' => 'helpdesk_member_emails_settings', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\EmailSettings::loadSettings', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2420 => [[['_route' => 'helpdesk_member_mailbox_settings', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannel::loadMailboxes', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2436 => [[['_route' => 'helpdesk_member_mailbox_load_configurations_xhr', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::loadMailboxesXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2451 => [[['_route' => 'helpdesk_member_mailbox_create_configuration', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannel::createMailboxConfiguration', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2480 => [[['_route' => 'helpdesk_member_mailbox_update_configuration', 'id' => '', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannel::updateMailboxConfiguration', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2509 => [[['_route' => 'helpdesk_member_mailbox_remove_configuration_xhr', 'id' => '', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::removeMailboxConfiguration', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2532 => [[['_route' => 'ajax_service_call', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxServiceCall', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2557 => [[['_route' => 'helpdesk_member_ticket_tag_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::listTagCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2573 => [[['_route' => 'helpdesk_member_ticket_tag_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::listTagCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2602 => [[['_route' => 'helpdesk_member_ticket_create_tag_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::createTicketTagXHR', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2631 => [[['_route' => 'helpdesk_member_update_ticket_tag_xhr', 'tagId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketTagXHR', '_locale' => 'en'], ['_locale', 'tagId'], null, null, false, true, null]],
        2660 => [[['_route' => 'helpdesk_member_remove_ticket_tag_xhr', 'tagId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::removeTicketTagXHR', '_locale' => 'en'], ['_locale', 'tagId'], null, null, false, true, null]],
        2697 => [[['_route' => 'helpdesk_member_update_emails_settings_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\EmailSettingsXHR::updateSettingsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2729 => [[['_route' => 'helpdesk_report_achievements_insight_action', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report::achievementInsightsAction', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2744 => [[['_route' => 'helpdesk_report_achievements_data_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report::getAchievementsXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2769 => [[['_route' => 'helpdesk_member_workflow_collection', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\Workflow::listWorkflowCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2782 => [[['_route' => 'workflowslist_xhr', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::workflowsListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2799 => [[['_route' => 'workflows_addaction', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\Workflow::createWorkflow', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2821 => [[['_route' => 'workflows_editaction', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\Workflow::editWorkflow', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2868 => [[['_route' => 'helpdesk_member_workflow_condition_options_xhr', 'entity' => 'default', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::getWorkflowConditionOptionsXHR', '_locale' => 'en'], ['_locale', 'entity'], null, null, false, true, null]],
        2919 => [[['_route' => 'helpdesk_member_workflow_action_options_xhr', 'entity' => 'default', 'event' => null, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::getWorkflowActionOptionsXHR', '_locale' => 'en'], ['_locale', 'entity', 'event'], null, null, false, true, null]],
        2950 => [[['_route' => 'workflows_xhraction', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::WorkflowsxhrAction', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2975 => [[['_route' => 'ajax_file_upload', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxFileUpload', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2990 => [[['_route' => 'ajax_file_remove', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxFileRemove', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3011 => [[['_route' => 'ajax_url_file', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxUrlFileUpload', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3044 => [[['_route' => 'helpdesk_member_knowledgebase_folders_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Folder::listFolders', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3060 => [[['_route' => 'helpdesk_member_knowledgebase_folders_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\KnowledgebaseXHR::listFoldersXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3072 => [[['_route' => 'helpdesk_member_knowledgebase_create_folder', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Folder::createFolder', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3104 => [[['_route' => 'helpdesk_member_knowledgebase_update_folder', 'folderId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Folder::updateFolder', '_locale' => 'en'], ['_locale', 'folderId'], null, null, false, true, null]],
        3131 => [[['_route' => 'helpdesk_member_knowledgebase_update_folder_xhr', 'folderId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\KnowledgebaseXHR::updateFolderXHR', '_locale' => 'en'], ['_locale', 'folderId'], null, null, false, true, null]],
        3162 => [[['_route' => 'helpdesk_member_knowledgebase_folder_categories_collection', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryListBySolution', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        3186 => [[['_route' => 'helpdesk_member_knowledgebase_category_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3219 => [[['_route' => 'helpdesk_member_knowledgebase_folder_categories_collection_xhr', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryListXhr', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        3246 => [[['_route' => 'helpdesk_member_knowledgebase_create_category', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::Category', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3272 => [[['_route' => 'helpdesk_member_knowledgebase_update_category_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3300 => [[['_route' => 'helpdesk_member_knowledgebase_update_category', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::Category', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3318 => [[['_route' => 'helpdesk_member_knowledgebase_article_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleList', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3344 => [[['_route' => 'helpdesk_member_knowledgebase_category_articles_collection', 'category' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListByCategory', '_locale' => 'en'], ['_locale', 'category'], null, null, false, false, null]],
        3382 => [[['_route' => 'helpdesk_member_knowledgebase_folder_articles_collection', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListBySolution', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        3396 => [[['_route' => 'helpdesk_member_knowledgebase_folder_articles_collection_xhr', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListXhr', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        3425 => [[['_route' => 'helpdesk_member_knowledgebase_article_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3444 => [[['_route' => 'helpdesk_member_knowledgebase_create_article', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::Article', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3470 => [[['_route' => 'helpdesk_member_knowledgebase_update_article_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3498 => [[['_route' => 'helpdesk_member_knowledgebase_update_article', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::Article', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3529 => [[['_route' => 'helpdesk_member_knowledgebase_revision_article', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::articleHistoryXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3559 => [[['_route' => 'helpdesk_member_knowledgebase_related_article_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::articleRelatedXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3588 => [[['_route' => 'helpdesk_member_knowledgebase_marketing_announcement', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::listAnnouncement', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3600 => [[['_route' => 'helpdesk_member_knowledgebase_marketing_announcement_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::listAnnouncementXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3645 => [[['_route' => 'helpdesk_member_knowledgebase_theme', 'type' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Branding::theme', '_locale' => 'en'], ['_locale', 'type'], null, null, false, true, null]],
        3658 => [[['_route' => 'helpdesk_member_knowledgebase_update_theme_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Branding::BrandingXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3677 => [[['_route' => 'helpdesk_member_knowledgebase_spam', 'type' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Branding::spam', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3720 => [[['_route' => 'helpdesk_member_knowledgebase_create_marketing_announcement', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::updateAnnouncement', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3749 => [[['_route' => 'helpdesk_member_knowledgebase_update_marketing_announcement', 'announcementId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::updateAnnouncement', '_locale' => 'en'], ['_locale', 'announcementId'], null, null, false, true, null]],
        3778 => [[['_route' => 'helpdesk_member_knowledgebase_remove_marketing_announcement_xhr', 'announcementId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::removeAnnouncementXHR', '_locale' => 'en'], ['_locale', 'announcementId'], null, null, false, true, null]],
        3808 => [[['_route' => 'helpdesk_forgot_account_password', '_locale' => 'en', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::forgotPassword'], ['_locale'], null, null, false, false, null]],
        3838 => [[['_route' => 'helpdesk_knowledgebase_folder', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewFolder', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, true, null]],
        3865 => [[['_route' => 'helpdesk_knowledgebase_folder_article_collection', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewFolderArticle', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        3923 => [[['_route' => 'helpdesk_update_account_credentials', '_locale' => 'en', 'email' => '', 'verificationCode' => '', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::updateCredentials'], ['_locale', 'email', 'verificationCode'], null, null, false, true, null]],
        3955 => [[['_route' => 'helpdesk_customer_login', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3967 => [[['_route' => 'helpdesk_customer_logout', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3987 => [[['_route' => 'helpdesk_customer_account', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::Account', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4019 => [[['_route' => 'helpdesk_customer_view_ticket_attachment', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AttachmentViewer::attachmentView', '_locale' => 'en'], ['_locale', 'id'], null, null, false, false, null]],
        4045 => [[['_route' => 'helpdesk_customer_ticket_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::Tickets', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4058 => [[['_route' => 'helpdesk_customer_ticket_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4090 => [[['_route' => 'helpdesk_customer_ticket', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketView', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4117 => [[['_route' => 'helpdesk_customer_rate_ticket', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::rateTicket', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4154 => [[['_route' => 'helpdesk_customer_save_ticket_draft', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::saveDraft', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4187 => [[['_route' => 'helpdesk_customer_download_ticket_attachment', 'attachmendId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::downloadAttachment', '_locale' => 'en'], ['_locale', 'attachmendId'], null, null, false, true, null]],
        4223 => [[['_route' => 'helpdesk_customer_download_ticket_attachment_zip', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::downloadAttachmentZip', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        4260 => [[['_route' => 'helpdesk_customer_update_ticket_collaborators_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketCollaboratorXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4304 => [[['_route' => 'helpdesk_customer_create_ticket_success', 'email' => '', 'flag' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketSuccess', '_locale' => 'en'], ['_locale', 'email', 'flag'], null, null, false, true, null]],
        4343 => [[['_route' => 'helpdesk_customer_thread_collection_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::threadListXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4374 => [[['_route' => 'helpdesk_customer_add_ticket_thread', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::saveReply', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4412 => [[['_route' => 'helpdesk_customer_upload_thread_encoded_image', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::base64ImageUpload', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        4438 => [[['_route' => 'helpdesk_customer_create_ticket', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketAdd', '_locale' => 'en'], ['_locale'], null, null, true, false, null]],
        4475 => [[['_route' => 'helpdesk_customer_front_article_search', 's' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::searchArticle', '_locale' => 'en'], ['_locale', 's'], null, null, false, true, null]],
        4497 => [[['_route' => 'helpdesk_knowledgebase_category_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::listCategories', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4521 => [[['_route' => 'helpdesk_knowledgebase_category', 'category' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewCategory', '_locale' => 'en'], ['_locale', 'category'], null, null, false, true, null]],
        4541 => [[['_route' => 'helpdesk_knowledgebase_exception', '_controller' => 'WebkulDefaultBundle:Default:exceptionDefault', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4571 => [[['_route' => 'helpdesk_knowledgebase_read_article', 'article' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewArticle', '_locale' => 'en'], ['_locale', 'article'], null, null, false, true, null]],
        4598 => [[['_route' => 'helpdesk_knowledgebase_read_slug_article', 'slug' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewArticle', '_locale' => 'en'], ['_locale', 'slug'], null, null, false, true, null]],
        4622 => [[['_route' => 'helpdesk_knowledgebase_rate_article', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::rateArticle', '_locale' => 'en'], ['_locale', 'articleId'], null, null, false, true, null]],
        4651 => [[['_route' => 'helpdesk_knowledgebase_search', 's' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::searchKnowledgebase', '_locale' => 'en'], ['_locale', 's'], null, null, false, true, null]],
        4691 => [[['_route' => 'helpdesk_knowledgebase_tag', 'tag' => '', 'name' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewTaggedResources', '_locale' => 'en'], ['_locale', 'tag', 'name'], null, null, false, true, null]],
        4701 => [
            [['_route' => 'helpdesk_knowledgebase', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::home', '_locale' => 'en'], ['_locale'], null, null, true, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
