<?php

namespace Practice\Module\Model\Plugin;

class Cart
{
    protected $productRepository;
    protected $storeManager;
    protected $checkoutSession;
    protected $logger;
    public function __construct( \Magento\Catalog\Api\ProductRepositoryInterface $productrepositoryInterface, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Session\SessionManagerInterface $checkoutSession, \Psr\Log\LoggerInterface $loggerInterface )
    {
        $this->productRepository = $productrepositoryInterface;
        $this->storeManager      = $storeManager;
        $this->checkoutSession   = $checkoutSession;
        $this->logger            = $loggerInterface;
    }
    public function beforeAddProduct( \Magento\Checkout\Model\Cart $subject, $productInfo, $requestInfo = null )
    {
        $productTax = array();
        $storeId    = $this->storeManager->getStore()->getId();
        $items      = $this->checkoutSession->getQuote()->getItems();
        $this->logger->info( json_encode( $items ) );
        foreach ( $items as $_item ) {
            $this->logger->info( json_encode( $_item->getData() ) );
            $productList  = $this->productRepository->getById( $_item->getProductId(), false, $storeId, true );
            $productTax[] = trim( $productList->getTaxClassificationKey() );
        }
        $productNew = $this->productRepository->getById( $item->getProductId(), false, $storeId, true );
        if ( !empty( $productTax ) && !in_array( trim( $productNew->getTaxClassificationKey() ), $productTax ) ) {            
             throw new \Magento\Framework\Exception\LocalizedException(__('You only order Same Tax Class product.'));
                return $this;
        }
        return array(
             $productInfo,
            $requestInfo 
        );
    }
}
