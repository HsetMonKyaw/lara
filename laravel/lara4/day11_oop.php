<?php
Interface IAccount{
    function deposit($amount);
    function withdraw($amount);
    function getBalance();

}
class Account{
    public $accountNo,$balance;
    function __construct($accountNo,$balance)
    {
        $this->accountNo=$accountNo;
        $this->balance=$balance;
    }
}
class SavingAccount extends Account implements IAccount{
    public $interest_rate;
    function __construct($accountNo,$balance,$interest_rate)
    {
        parent::__construct($accountNo,$balance);
        $this->interest_rate=$interest_rate;
    }
    function deposit($amount)
    {
        echo "Saving Account";
        $this->balance+=$amount;
    }
    function withdraw($amount)
    {
        if($amount<$this->balance)
        {
            $this->balance-=$amount;
        }
        else
        {
            echo "Insufficient Amount";
        }
    }
    function getBalance(){
        return $this->balance;
    }
    function applyInterest($year){
        $this->deposit($this->balance * $this->interest_rate * $year);
    }
}
class CurrentAccount extends Account implements IAccount{
    public $overdraftLimit;
    function __construct($accountNo,$balance,$overdraftLimit)
    {
        parent::__construct($accountNo,$balance);
        $this->overdraftLimit=$overdraftLimit;
    }
    function deposit($amount)
    {
        echo "Current Account";
        $this->balance+=$amount;
    }
    function withdraw($amount)
    {
        if(self::$count <= $this->overdraftLimit && $this->balance >= $amount)
        {
            $this->balance-=$amount;
            self::$count++;
        }
        else
        {
            echo "Beyond Limited Transcation";
        }
    }
    function getBalance(){
        return $this->balance;
    }

    function transfer($account,$amount){
        if(self::$count<= $this->overdraftLimit)
        {
            if($this->balance >= $amount)
            {
                $this->balance-=$amount;
                $account->balance+=$amount;
                self::$count++;
            }
            
        }
    }
}

$saving1=new SavingAccount("09987776677",10000,0.08);
echo "Balance is :" .$saving1->getBalance();
$saving1->deposit(10000000);
echo "Balance is :" .$saving1->getBalance();

$saving1->applyInterest(3);
echo "Balance is :" .$saving1->getBalance();

$saving1->withdraw(10000);
echo "Balance is :" .$saving1->getBalance();

?>