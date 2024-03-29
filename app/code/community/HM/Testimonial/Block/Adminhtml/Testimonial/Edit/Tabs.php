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
class HM_Testimonial_Block_Adminhtml_Testimonial_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
		public function __construct()
		{
				parent::__construct();
				$this->setId("testimonial_tabs");
				$this->setDestElementId("edit_form");
				$this->setTitle(Mage::helper("testimonial")->__("Testimonial Item Information"));
		}
		protected function _beforeToHtml()
		{
				$this->addTab("form_section", array(
				"label" => Mage::helper("testimonial")->__("General Information"),
				"title" => Mage::helper("testimonial")->__("General Information"),
				"content" => $this->getLayout()->createBlock("testimonial/adminhtml_testimonial_edit_tab_form")->toHtml(),
				));
				return parent::_beforeToHtml();
		}

}
