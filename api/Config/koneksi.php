<?php
$host     = 'localhost';
$user     = 'uas'; // diisi dengan user database kalian biasanya
                    // defaultnya bernama root jika kita belum 
                    // merubahnya
$password = 'Wisnu1308!';  //diisi dengan password database kalian biasanya
                 // defaultnya kosong
$db       = 'najwafoodv2'; //diisi dengan nama database kalian
$link = mysqli_connect($host, $user, $password, $db) or die(mysqli_error($link));