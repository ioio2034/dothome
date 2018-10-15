<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl2_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl2_argument'}->checkFilter('number');
${'module_srl2_argument'}->createConditionValue();
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
} else
${'module_srl2_argument'} = NULL;if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl3_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl3_argument'}->checkFilter('number');
${'exclude_module_srl3_argument'}->createConditionValue();
if(!${'exclude_module_srl3_argument'}->isValid()) return ${'exclude_module_srl3_argument'}->getErrorMessage();
} else
${'exclude_module_srl3_argument'} = NULL;if(${'exclude_module_srl3_argument'} !== null) ${'exclude_module_srl3_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl4_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl4_argument'}->createConditionValue();
if(!${'category_srl4_argument'}->isValid()) return ${'category_srl4_argument'}->getErrorMessage();
} else
${'category_srl4_argument'} = NULL;if(${'category_srl4_argument'} !== null) ${'category_srl4_argument'}->setColumnType('number');
if(isset($args->s_is_notice)) {
${'s_is_notice5_argument'} = new ConditionArgument('s_is_notice', $args->s_is_notice, 'equal');
${'s_is_notice5_argument'}->createConditionValue();
if(!${'s_is_notice5_argument'}->isValid()) return ${'s_is_notice5_argument'}->getErrorMessage();
} else
${'s_is_notice5_argument'} = NULL;if(${'s_is_notice5_argument'} !== null) ${'s_is_notice5_argument'}->setColumnType('char');
if(isset($args->member_srl)) {
${'member_srl6_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl6_argument'}->checkFilter('number');
${'member_srl6_argument'}->createConditionValue();
if(!${'member_srl6_argument'}->isValid()) return ${'member_srl6_argument'}->getErrorMessage();
} else
${'member_srl6_argument'} = NULL;if(${'member_srl6_argument'} !== null) ${'member_srl6_argument'}->setColumnType('number');
if(isset($args->member_srls)) {
${'member_srls7_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls7_argument'}->checkFilter('number');
${'member_srls7_argument'}->createConditionValue();
if(!${'member_srls7_argument'}->isValid()) return ${'member_srls7_argument'}->getErrorMessage();
} else
${'member_srls7_argument'} = NULL;if(${'member_srls7_argument'} !== null) ${'member_srls7_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList8_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList8_argument'}->createConditionValue();
if(!${'statusList8_argument'}->isValid()) return ${'statusList8_argument'}->getErrorMessage();
} else
${'statusList8_argument'} = NULL;if(${'statusList8_argument'} !== null) ${'statusList8_argument'}->setColumnType('varchar');
if(isset($args->division)) {
${'division9_argument'} = new ConditionArgument('division', $args->division, 'more');
${'division9_argument'}->createConditionValue();
if(!${'division9_argument'}->isValid()) return ${'division9_argument'}->getErrorMessage();
} else
${'division9_argument'} = NULL;if(${'division9_argument'} !== null) ${'division9_argument'}->setColumnType('number');
if(isset($args->last_division)) {
${'last_division10_argument'} = new ConditionArgument('last_division', $args->last_division, 'below');
${'last_division10_argument'}->createConditionValue();
if(!${'last_division10_argument'}->isValid()) return ${'last_division10_argument'}->getErrorMessage();
} else
${'last_division10_argument'} = NULL;if(${'last_division10_argument'} !== null) ${'last_division10_argument'}->setColumnType('number');
if(isset($args->s_title)) {
${'s_title11_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title11_argument'}->createConditionValue();
if(!${'s_title11_argument'}->isValid()) return ${'s_title11_argument'}->getErrorMessage();
} else
${'s_title11_argument'} = NULL;if(${'s_title11_argument'} !== null) ${'s_title11_argument'}->setColumnType('varchar');
if(isset($args->s_content)) {
${'s_content12_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content12_argument'}->createConditionValue();
if(!${'s_content12_argument'}->isValid()) return ${'s_content12_argument'}->getErrorMessage();
} else
${'s_content12_argument'} = NULL;if(${'s_content12_argument'} !== null) ${'s_content12_argument'}->setColumnType('bigtext');
if(isset($args->s_user_name)) {
${'s_user_name13_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name13_argument'}->createConditionValue();
if(!${'s_user_name13_argument'}->isValid()) return ${'s_user_name13_argument'}->getErrorMessage();
} else
${'s_user_name13_argument'} = NULL;if(${'s_user_name13_argument'} !== null) ${'s_user_name13_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id14_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id14_argument'}->createConditionValue();
if(!${'s_user_id14_argument'}->isValid()) return ${'s_user_id14_argument'}->getErrorMessage();
} else
${'s_user_id14_argument'} = NULL;if(${'s_user_id14_argument'} !== null) ${'s_user_id14_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name15_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name15_argument'}->createConditionValue();
if(!${'s_nick_name15_argument'}->isValid()) return ${'s_nick_name15_argument'}->getErrorMessage();
} else
${'s_nick_name15_argument'} = NULL;if(${'s_nick_name15_argument'} !== null) ${'s_nick_name15_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address16_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address16_argument'}->createConditionValue();
if(!${'s_email_address16_argument'}->isValid()) return ${'s_email_address16_argument'}->getErrorMessage();
} else
${'s_email_address16_argument'} = NULL;if(${'s_email_address16_argument'} !== null) ${'s_email_address16_argument'}->setColumnType('varchar');
if(isset($args->s_homepage)) {
${'s_homepage17_argument'} = new ConditionArgument('s_homepage', $args->s_homepage, 'like');
${'s_homepage17_argument'}->createConditionValue();
if(!${'s_homepage17_argument'}->isValid()) return ${'s_homepage17_argument'}->getErrorMessage();
} else
${'s_homepage17_argument'} = NULL;if(${'s_homepage17_argument'} !== null) ${'s_homepage17_argument'}->setColumnType('varchar');
if(isset($args->s_tags)) {
${'s_tags18_argument'} = new ConditionArgument('s_tags', $args->s_tags, 'like');
${'s_tags18_argument'}->createConditionValue();
if(!${'s_tags18_argument'}->isValid()) return ${'s_tags18_argument'}->getErrorMessage();
} else
${'s_tags18_argument'} = NULL;if(${'s_tags18_argument'} !== null) ${'s_tags18_argument'}->setColumnType('text');
if(isset($args->s_member_srl)) {
${'s_member_srl19_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl19_argument'}->createConditionValue();
if(!${'s_member_srl19_argument'}->isValid()) return ${'s_member_srl19_argument'}->getErrorMessage();
} else
${'s_member_srl19_argument'} = NULL;if(${'s_member_srl19_argument'} !== null) ${'s_member_srl19_argument'}->setColumnType('number');
if(isset($args->s_member_srls)) {
${'s_member_srls20_argument'} = new ConditionArgument('s_member_srls', $args->s_member_srls, 'in');
${'s_member_srls20_argument'}->createConditionValue();
if(!${'s_member_srls20_argument'}->isValid()) return ${'s_member_srls20_argument'}->getErrorMessage();
} else
${'s_member_srls20_argument'} = NULL;if(${'s_member_srls20_argument'} !== null) ${'s_member_srls20_argument'}->setColumnType('number');
if(isset($args->s_readed_count)) {
${'s_readed_count21_argument'} = new ConditionArgument('s_readed_count', $args->s_readed_count, 'more');
${'s_readed_count21_argument'}->createConditionValue();
if(!${'s_readed_count21_argument'}->isValid()) return ${'s_readed_count21_argument'}->getErrorMessage();
} else
${'s_readed_count21_argument'} = NULL;if(${'s_readed_count21_argument'} !== null) ${'s_readed_count21_argument'}->setColumnType('number');
if(isset($args->s_voted_count)) {
${'s_voted_count22_argument'} = new ConditionArgument('s_voted_count', $args->s_voted_count, 'more');
${'s_voted_count22_argument'}->createConditionValue();
if(!${'s_voted_count22_argument'}->isValid()) return ${'s_voted_count22_argument'}->getErrorMessage();
} else
${'s_voted_count22_argument'} = NULL;if(${'s_voted_count22_argument'} !== null) ${'s_voted_count22_argument'}->setColumnType('number');
if(isset($args->s_blamed_count)) {
${'s_blamed_count23_argument'} = new ConditionArgument('s_blamed_count', $args->s_blamed_count, 'less');
${'s_blamed_count23_argument'}->createConditionValue();
if(!${'s_blamed_count23_argument'}->isValid()) return ${'s_blamed_count23_argument'}->getErrorMessage();
} else
${'s_blamed_count23_argument'} = NULL;if(${'s_blamed_count23_argument'} !== null) ${'s_blamed_count23_argument'}->setColumnType('number');
if(isset($args->s_comment_count)) {
${'s_comment_count24_argument'} = new ConditionArgument('s_comment_count', $args->s_comment_count, 'more');
${'s_comment_count24_argument'}->createConditionValue();
if(!${'s_comment_count24_argument'}->isValid()) return ${'s_comment_count24_argument'}->getErrorMessage();
} else
${'s_comment_count24_argument'} = NULL;if(${'s_comment_count24_argument'} !== null) ${'s_comment_count24_argument'}->setColumnType('number');
if(isset($args->s_trackback_count)) {
${'s_trackback_count25_argument'} = new ConditionArgument('s_trackback_count', $args->s_trackback_count, 'more');
${'s_trackback_count25_argument'}->createConditionValue();
if(!${'s_trackback_count25_argument'}->isValid()) return ${'s_trackback_count25_argument'}->getErrorMessage();
} else
${'s_trackback_count25_argument'} = NULL;if(${'s_trackback_count25_argument'} !== null) ${'s_trackback_count25_argument'}->setColumnType('number');
if(isset($args->s_uploaded_count)) {
${'s_uploaded_count26_argument'} = new ConditionArgument('s_uploaded_count', $args->s_uploaded_count, 'more');
${'s_uploaded_count26_argument'}->createConditionValue();
if(!${'s_uploaded_count26_argument'}->isValid()) return ${'s_uploaded_count26_argument'}->getErrorMessage();
} else
${'s_uploaded_count26_argument'} = NULL;if(${'s_uploaded_count26_argument'} !== null) ${'s_uploaded_count26_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate27_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate27_argument'}->createConditionValue();
if(!${'s_regdate27_argument'}->isValid()) return ${'s_regdate27_argument'}->getErrorMessage();
} else
${'s_regdate27_argument'} = NULL;if(${'s_regdate27_argument'} !== null) ${'s_regdate27_argument'}->setColumnType('date');
if(isset($args->s_last_update)) {
${'s_last_update28_argument'} = new ConditionArgument('s_last_update', $args->s_last_update, 'like_prefix');
${'s_last_update28_argument'}->createConditionValue();
if(!${'s_last_update28_argument'}->isValid()) return ${'s_last_update28_argument'}->getErrorMessage();
} else
${'s_last_update28_argument'} = NULL;if(${'s_last_update28_argument'} !== null) ${'s_last_update28_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress29_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress29_argument'}->createConditionValue();
if(!${'s_ipaddress29_argument'}->isValid()) return ${'s_ipaddress29_argument'}->getErrorMessage();
} else
${'s_ipaddress29_argument'} = NULL;if(${'s_ipaddress29_argument'} !== null) ${'s_ipaddress29_argument'}->setColumnType('varchar');
if(isset($args->start_date)) {
${'start_date30_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date30_argument'}->createConditionValue();
if(!${'start_date30_argument'}->isValid()) return ${'start_date30_argument'}->getErrorMessage();
} else
${'start_date30_argument'} = NULL;if(${'start_date30_argument'} !== null) ${'start_date30_argument'}->setColumnType('date');
if(isset($args->end_date)) {
${'end_date31_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date31_argument'}->createConditionValue();
if(!${'end_date31_argument'}->isValid()) return ${'end_date31_argument'}->getErrorMessage();
} else
${'end_date31_argument'} = NULL;if(${'end_date31_argument'} !== null) ${'end_date31_argument'}->setColumnType('date');

${'page34_argument'} = new Argument('page', $args->{'page'});
${'page34_argument'}->ensureDefaultValue('1');
if(!${'page34_argument'}->isValid()) return ${'page34_argument'}->getErrorMessage();

${'page_count35_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count35_argument'}->ensureDefaultValue('10');
if(!${'page_count35_argument'}->isValid()) return ${'page_count35_argument'}->getErrorMessage();

${'list_count36_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count36_argument'}->ensureDefaultValue('20');
if(!${'list_count36_argument'}->isValid()) return ${'list_count36_argument'}->getErrorMessage();

${'sort_index32_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index32_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index32_argument'}->isValid()) return ${'sort_index32_argument'}->getErrorMessage();

${'order_type33_argument'} = new SortArgument('order_type33', $args->order_type);
${'order_type33_argument'}->ensureDefaultValue('asc');
if(!${'order_type33_argument'}->isValid()) return ${'order_type33_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl2_argument,"in")
,new ConditionWithArgument('`module_srl`',$exclude_module_srl3_argument,"notin", 'and')
,new ConditionWithArgument('`category_srl`',$category_srl4_argument,"in", 'and')
,new ConditionWithArgument('`is_notice`',$s_is_notice5_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl6_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls7_argument,"in", 'and')
,new ConditionWithArgument('`status`',$statusList8_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`list_order`',$division9_argument,"more", 'and')
,new ConditionWithArgument('`list_order`',$last_division10_argument,"below", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`title`',$s_title11_argument,"like")
,new ConditionWithArgument('`content`',$s_content12_argument,"like", 'or')
,new ConditionWithArgument('`user_name`',$s_user_name13_argument,"like", 'or')
,new ConditionWithArgument('`user_id`',$s_user_id14_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name15_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address16_argument,"like", 'or')
,new ConditionWithArgument('`homepage`',$s_homepage17_argument,"like", 'or')
,new ConditionWithArgument('`tags`',$s_tags18_argument,"like", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srl19_argument,"equal", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srls20_argument,"in", 'or')
,new ConditionWithArgument('`readed_count`',$s_readed_count21_argument,"more", 'or')
,new ConditionWithArgument('`voted_count`',$s_voted_count22_argument,"more", 'or')
,new ConditionWithArgument('`blamed_count`',$s_blamed_count23_argument,"less", 'or')
,new ConditionWithArgument('`comment_count`',$s_comment_count24_argument,"more", 'or')
,new ConditionWithArgument('`trackback_count`',$s_trackback_count25_argument,"more", 'or')
,new ConditionWithArgument('`uploaded_count`',$s_uploaded_count26_argument,"more", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate27_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_update`',$s_last_update28_argument,"like_prefix", 'or')
,new ConditionWithArgument('`ipaddress`',$s_ipaddress29_argument,"like_prefix", 'or')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`last_update`',$start_date30_argument,"more", 'and')
,new ConditionWithArgument('`last_update`',$end_date31_argument,"less", 'and')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index32_argument'}, $order_type33_argument)
));
$query->setLimit(new Limit(${'list_count36_argument'}, ${'page34_argument'}, ${'page_count35_argument'}));
return $query; ?>