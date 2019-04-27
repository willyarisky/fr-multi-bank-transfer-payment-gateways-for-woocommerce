<?php

/**
 * Bank Transfer 9 Payment Gateway.
 *
 * Provides a Bank Transfer Payment Gateway. 
 * 
 * @since 1.0.0
 * @deprecated 1.1.0
 * @author Fahri Rusliyadi <fahri.rusliyadi@gmail.com>
 */
class Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Bank_Transfer_9 extends Fr_Multi_Bank_Transfer_Gateways_For_Woocommerce_Bank_Transfer {
    /**
     * Constructor for the gateway.
     * 
     * @since 1.0.0
     */
    public function __construct() {
        WP_DEBUG && trigger_error( sprintf( '%1$s is <strong>deprecated</strong> since version %2$s with no alternative available.', __CLASS__, '1.1.0' ) );

        $this->id           = 'bank_transfer_9';
        $this->method_title = __('Bank Transfer 9', 'fr-multi-bank-transfer-gateways-for-woocommerce');
        
        parent::__construct();
    }
}
