<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispCashpayAdminModInstList';
$info->action = new stdClass;
$info->action->dispCashpayAdminModInstList = new stdClass;
$info->action->dispCashpayAdminModInstList->type='view';
$info->action->dispCashpayAdminModInstList->grant='guest';
$info->action->dispCashpayAdminModInstList->standalone='true';
$info->action->dispCashpayAdminModInstList->ruleset='';
$info->action->dispCashpayAdminModInstList->method='';
$info->action->dispCashpayAdminModInstList->check_csrf='true';
$info->action->dispCashpayAdminModInstList->meta_noindex='false';
$info->action->dispCashpayAdminInsertModInst = new stdClass;
$info->action->dispCashpayAdminInsertModInst->type='view';
$info->action->dispCashpayAdminInsertModInst->grant='guest';
$info->action->dispCashpayAdminInsertModInst->standalone='true';
$info->action->dispCashpayAdminInsertModInst->ruleset='';
$info->action->dispCashpayAdminInsertModInst->method='';
$info->action->dispCashpayAdminInsertModInst->check_csrf='true';
$info->action->dispCashpayAdminInsertModInst->meta_noindex='false';
$info->action->procCashpayAdminInsertModInst = new stdClass;
$info->action->procCashpayAdminInsertModInst->type='controller';
$info->action->procCashpayAdminInsertModInst->grant='guest';
$info->action->procCashpayAdminInsertModInst->standalone='true';
$info->action->procCashpayAdminInsertModInst->ruleset='';
$info->action->procCashpayAdminInsertModInst->method='';
$info->action->procCashpayAdminInsertModInst->check_csrf='true';
$info->action->procCashpayAdminInsertModInst->meta_noindex='false';
$info->action->dispCashpayForm = new stdClass;
$info->action->dispCashpayForm->type='view';
$info->action->dispCashpayForm->grant='guest';
$info->action->dispCashpayForm->standalone='true';
$info->action->dispCashpayForm->ruleset='';
$info->action->dispCashpayForm->method='';
$info->action->dispCashpayForm->check_csrf='true';
$info->action->dispCashpayForm->meta_noindex='false';
$info->action->getCashpayForm = new stdClass;
$info->action->getCashpayForm->type='model';
$info->action->getCashpayForm->grant='guest';
$info->action->getCashpayForm->standalone='true';
$info->action->getCashpayForm->ruleset='';
$info->action->getCashpayForm->method='';
$info->action->getCashpayForm->check_csrf='true';
$info->action->getCashpayForm->meta_noindex='false';
$info->action->procCashpayDoIt = new stdClass;
$info->action->procCashpayDoIt->type='controller';
$info->action->procCashpayDoIt->grant='guest';
$info->action->procCashpayDoIt->standalone='true';
$info->action->procCashpayDoIt->ruleset='requestPayment';
$info->action->procCashpayDoIt->method='';
$info->action->procCashpayDoIt->check_csrf='true';
$info->action->procCashpayDoIt->meta_noindex='false';
return $info;