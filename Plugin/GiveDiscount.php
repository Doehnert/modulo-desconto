<?php

namespace Vexpro\Desconto\Plugin;

class GiveDiscount
{

    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        $om = \Magento\Framework\App\ObjectManager::getInstance();
        $customerSession = $om->create('Magento\Customer\Model\Session');
        if($customerSession->isLoggedIn())
        {
            $id=$customerSession->getCustomer()->getId();
            // if ($id=2) {//Your customer id
            if (1==1)
            {
                return $result+500;//Your logic of percentage
            }
        }else{
            return $result;
        }

    }

}