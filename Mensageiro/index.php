<?php

require 'vendor/autoload.php';
use App\Whatsapp;
use App\Email;
use App\Sms;

$email = new Email();
$email->enviar("Esta mensagem foi enviada por: ");

$sms = new Sms();
$sms->enviar("Esta mensagem foi enviada por: ");

$whatsapp= new Whatsapp();
$whatsapp->enviar("Esta mensagem foi enviada por: ");