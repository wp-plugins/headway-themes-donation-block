<?php
class HeadwayDonationBlockOptions extends HeadwayBlockOptionsAPI {	
	public $tabs = array(
		'settings' => 'Settings'
	);
	public $inputs = array(
		'settings' => array(
			'email' => array(
				'type' => 'text',
				'name' => 'email',
				'label' => 'PayPal Email ID',
				'default' => '',
				'tooltip' => 'Enter your paypal email ID to receive payments.'
			),			
			'name' => array(
				'type' => 'text',
				'name' => 'name',
				'label' => 'Business/Website Name',
				'default' => '',
				'tooltip' => 'Enter your business or website name so people know who they are donating to.'
			),
			'amount' => array(
				'type' => 'slider',
				'name' => 'amount', 
				'label' => 'Donation Amount',
				'slider-min' => 1,
				'slider-max' => 100,
				'slider-interval' => 1,
				'default' => 5,
				'tooltip' => 'Select the fixed amount for a donation.'
			),
			'currency' => array(
				'type' => 'select',
				'name' => 'currency',
				'label' => 'Currency',
				'options' => array(
					'USD' => 'USD (Us Dollars)',
					'EUR' => 'EUR (Euro)',
					'GBP' => 'GBP (Gold Pound Sterling)',
					'AUD' => 'AUD (Australian Dollar)',
					'NZD' => 'NZD (New Zealand Dollar)',
					'CAD' => 'CAD (Canadian Dollar)',
					'CHF' => 'CHF (Swiss Franc)',
					'SGD' => 'SGD (Singapore Dollar)',
					'TWD' => 'TWD (Taiwan New Dollar)',
					'MXN' => 'MXN (Mexican Peso)',
					'PHP' => 'PHP (Philippine Peso)',
					'CZK' => 'CZK (Czech Koruna)',
					'PLN' => 'PLN (Polish Zloty)',
					'SEK' => 'SEK (Swedish Krona)',
					'DKK' => 'DKK (Danish Krone)',
					'NOK' => 'NOK (Norwegian Krone)',
					'HKD' => 'HKD (Hong Kong Dollar)',
					'HUF' => 'HUF (Hungarian Forint)',
					'ILS' => 'ILS (Israeli New Sheqel)',
					'JPY ' => 'JPY (Japanese Yen)',
					'THB' => 'THB (Thai Baht)',
					
				),
				'tooltip' => 'Choose your country\'s currency.'
			),
			'reference' => array(
				'type' => 'text',
				'name' => 'reference',
				'label' => 'Reference ID (optional)',
				'tooltip' => 'Enter an optional reference ID for these transactions.',
				'default' => 'donation'
			),
			'credit' => array(
				'type' => 'checkbox',
				'name' => 'credit',
				'label' => 'Show Credit Card Icons',
				'tooltip' => 'Show or hide credit card icons',
				'default' => true
			)
		)	
	);	
}