<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispCurrencyAdminContent';
$info->menu = new stdClass;
$info->menu->page = new stdClass;
$info->menu->page->title='통합통화';
$info->menu->page->type='all';
$info->action = new stdClass;
$info->action->dispCurrencyAdminContent = new stdClass;
$info->action->dispCurrencyAdminContent->type='view';
$info->action->dispCurrencyAdminContent->grant='guest';
$info->action->dispCurrencyAdminContent->standalone='true';
$info->action->dispCurrencyAdminContent->ruleset='';
$info->action->dispCurrencyAdminContent->method='';
$info->action->dispCurrencyAdminContent->check_csrf='true';
$info->action->dispCurrencyAdminContent->meta_noindex='false';
$info->action->procCurrencyAdminConfig = new stdClass;
$info->action->procCurrencyAdminConfig->type='controller';
$info->action->procCurrencyAdminConfig->grant='guest';
$info->action->procCurrencyAdminConfig->standalone='true';
$info->action->procCurrencyAdminConfig->ruleset='';
$info->action->procCurrencyAdminConfig->method='';
$info->action->procCurrencyAdminConfig->check_csrf='true';
$info->action->procCurrencyAdminConfig->meta_noindex='false';
$info->action->getPriceByJquery = new stdClass;
$info->action->getPriceByJquery->type='model';
$info->action->getPriceByJquery->grant='guest';
$info->action->getPriceByJquery->standalone='true';
$info->action->getPriceByJquery->ruleset='';
$info->action->getPriceByJquery->method='';
$info->action->getPriceByJquery->check_csrf='true';
$info->action->getPriceByJquery->meta_noindex='false';
$info->action->getTotalPriceByJquery = new stdClass;
$info->action->getTotalPriceByJquery->type='model';
$info->action->getTotalPriceByJquery->grant='guest';
$info->action->getTotalPriceByJquery->standalone='true';
$info->action->getTotalPriceByJquery->ruleset='';
$info->action->getTotalPriceByJquery->method='';
$info->action->getTotalPriceByJquery->check_csrf='true';
$info->action->getTotalPriceByJquery->meta_noindex='false';
return $info;