<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {

    $cooperators = new Typecho_Widget_Helper_Form_Element_Textarea('cooperators', NULL, NULL, '合作伙伴', "需要使用 JSON 格式输入, 只限 3 个");
    $form->addInput($cooperators);

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}