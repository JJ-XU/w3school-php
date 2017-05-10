CREATE TABLE `city`(
`id` int(11) unsigned NOT NULL auto_increment,
`name` VARCHAR(50) NOT NULL DEFAULT '' ,
`uname` VARCHAR(50) NOT NULL DEFAULT '' ,
`parent_id` int(10) unsigned NOT NULL default 0,
`is_default` tinyint(1) NOT NULL DEFAULT 0,
`listorder` int(8) unsigned NOT NULL default 0,
`status` tinyint(1) NOT NULL DEFAULT 0,
`create_time` timestamp not null default current_timestamp,
`update_time` int(11) unsigned NOT NULL default 0,
PRIMARY KEY (`id`),
KEY parent_id(`parent_id`),
UNIQUE KEY uname(`uname`)
)DEFAULT  CHARSET=utf8;
INSERT INTO `city` (`id`, `name`, `uname`, `parent_id`, `is_default`, `listorder`, `status`, `update_time`) VALUES
(1, '北京', 'beijing1', 0, 0, '', 1, 0),
(2, '北京', 'beijing', 1, 0, '', 1, 0),
(4, '江西', 'jiangxi', 0, 0, '', 1, 0),
(5, '南昌', 'nanchang', 4, 1, '', 1, 0),
(6, '上饶', 'shangrao', 4, 0, '', 1, 0),
(7, '广东', 'guangdong', 0, 0, '', 1, 0),
(8, '广州', 'gz', 7, 0, '', 1,0);