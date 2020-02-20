a<?php 

interface PaymentGateway { 
	public function charge($amount, $token, $destinationAccountId);
}