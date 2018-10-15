<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModulesInfo");
$query->setAction("select");
$query->setPriority("");

${'module_srls37_argument'} = new ConditionArgument('module_srls', $args->module_srls, 'in');
${'module_srls37_argument'}->checkNotNull();
${'module_srls37_argument'}->createConditionValue();
if(!${'module_srls37_argument'}->isValid()) return ${'module_srls37_argument'}->getErrorMessage();
if(${'module_srls37_argument'} !== null) ${'module_srls37_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srls37_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>