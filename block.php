<?php
class HeadwayDonationBlock extends HeadwayBlockAPI {
	
	
	public $id = 'donation';
	
	public $name = 'Donation';
	
	public $options_class = 'HeadwayDonationBlockOptions';
		
	function content($block) {
	$check = parent::get_setting($block, 'credit', true);
	if($check == true) {
		$credit = '<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">';
	}
		echo '
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
				<input type="hidden" name="cmd" value="_donations">
				<input type="hidden" name="business" value="'.parent::get_setting($block, 'email', '').'">
				<input type="hidden" name="amount" value="'.parent::get_setting($block, 'amount', 5).'">
				<input type="hidden" name="item_name" value="'.parent::get_setting($block, 'name', '').'">
				<input type="hidden" name="item_number" value="'.parent::get_setting($block, 'reference', '').'">
				<input type="hidden" name="currency_code" value="'.parent::get_setting($block, 'currency', 'USD').'">
				<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				'.$credit.'
						</form>
		';
	}	
}