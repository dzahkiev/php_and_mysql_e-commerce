<?php
class AdminMenu
{
public $mLinkToStoreAdmin;
public $mLinkToStoreFront;
public $mLinkToAttributesAdmin;
public $mLinkToLogout;
public $mLinkToCartsAdmin;
public $mLinkToOrdersAdmin;
public function __construct()
{
$this->mLinkToStoreAdmin = Link::ToAdmin();
	if (isset ($_SESSION['link_to_store_front']))
$this->mLinkToStoreFront = $_SESSION['link_to_store_front'];
	else
$this->mLinkToStoreFront = Link::ToIndex();
$this->mLinkToCartsAdmin = Link::ToCartsAdmin();
$this->mLinkToAttributesAdmin = Link::ToAttributesAdmin();
$this->mLinkToOrdersAdmin = Link::ToOrdersAdmin();
$this->mLinkToLogout = Link::ToLogout();
}
}
?>