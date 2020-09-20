<?php

interface PaymentInterface {
   public function pay();
}


class Visa implements PaymentInterface {



    public function pay(){
        echo "Paying with ".__CLASS__;
    }
}

class Mastercard implements PaymentInterface {



    public function pay(){
        echo "Paying with ".__CLASS__;
    }
}

class PayPal implements PaymentInterface {



    public function pay(){
        echo "Paying with ".__CLASS__;
    }
}