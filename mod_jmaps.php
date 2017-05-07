<?php

defined('_JEXEC') or die;

$vars = $params->get('vars');

$doc = JFactory::getDocument();

$doc->addCustomTag("<style>svg {width: 100%; height: 500px;} path {fill: #fff; transition: .6s fill;} path:hover {fill: #eee;}</style>");


require JModuleHelper::getLayoutPath('mod_jmaps', $params->get('layout', 'default'));
