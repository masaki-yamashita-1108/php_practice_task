<?php

//課題1
//引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

//仮引数を定義
function double($a) {

//数値を2倍にする関数の内容
  $result = 0 ;
  $result = $a * 2 ; 
  return $result ;
}


//引数に2倍したい元の数値を格納
echo double(555); 
