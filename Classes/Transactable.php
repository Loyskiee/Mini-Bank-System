<?php 
//interface class 
interface Transactable
{
    //deposit (amount)
public function deposit($amount);
//widthdraw (amount)
public function withdraw($amount);
}
