<?php
/**
 * Magento Testimonial
 *
 * Testimonial Plus for Magento
 * Author: Hire Magento
 * Website: www.hiremagento.com 
 * Suport Email: hiremagento@gmail.com
 *
**/
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
create table hm_testimonial(testimonial_id int not null auto_increment, 
`name`	varchar(255) NOT NULL DEFAULT '',
`email`	varchar(255) NOT NULL DEFAULT '',
`company` varchar(255) NOT NULL DEFAULT '',
`website` varchar(255) NOT NULL DEFAULT '',
`image` varchar(800) NOT NULL DEFAULT '',
`video` text NOT NULL DEFAULT '',
`sidebar` smallint(6) NOT NULL DEFAULT 0,
`position` int(6) NOT NULL DEFAULT 0,
`testimonial` text NOT NULL DEFAULT '',
`status` smallint(6) NOT NULL DEFAULT 0,
`created_time` datetime NULL,
`update_time` datetime NULL,
primary key(testimonial_id));
		
SQLTEXT;

$installer->run($sql);
//demo 
//Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 