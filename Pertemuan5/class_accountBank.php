<?php
require_once 'class_account.php';
class AccountBank extends Account {
    public $customer;

    function __construct($no, $saldo_awal, $cust){
        parent::__construct($no, $saldo_awal);
        $this->customer = $cust;
    }
    function cetak(){
        parent::cetak();
        $this->customer;
    }
    function transfer($obj_account,$uang){
        $obj_account->deposit($uang);
        $this->withdraw($uang);
    }
    public function saldo() {
        return $this->saldo;
    }
}
?>