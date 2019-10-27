a<?php 

interface PaymentGateway { 
	public function charge($amount, $token, $destinationAccountId);
	public function charge($amount, $token, $destinationAccountId);
}