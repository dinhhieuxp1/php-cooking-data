<?php

function Ex1()
{
    $string = file_get_contents("phim.json", FILE_USE_INCLUDE_PATH);
    $brut = json_decode($string, true);
    $top = $brut["feed"]["entry"];

    $x = 1;
    while ($x <= 10) {
        print_r($top[$x++]["im:name"]["label"]);
        print_r("\n");
    }
}
function Ex2()
{
    $string = file_get_contents("phim.json", FILE_USE_INCLUDE_PATH);
    $brut = json_decode($string, true);
    $top = $brut["feed"]["entry"];
    $search = (String)readLine("Tìm kiếm bộ phim:");
    //$num=0;
    foreach ($top as $key => $i) {
        if ($i["im:name"]["label"] == $search) {
           //for ($x = 0; $x <= count($i); $x++) {
                  print_r($i);
                  print_r("\n");


           // }
            //echo $num;
        }
    }
}
function Ex3()
{
    $string = file_get_contents("phim.json", FILE_USE_INCLUDE_PATH);
    $brut = json_decode($string, true);
    $top = $brut["feed"]["entry"];
    $search = (string)readLine("Tìm kiếm đạo diễn của bộ phim:");

    foreach ($top as $key => $i) {
        if ($i["im:name"]["label"] == $search) {
            //for ($x = 0; $x <= count($i); $x++) {
           print_r($i["im:artist"]);
           print_r("\n");
        }
    }

}
function Ex4()
{
    $string = file_get_contents("phim.json", FILE_USE_INCLUDE_PATH);
    $brut = json_decode($string, true);
    $top = $brut["feed"]["entry"];
    $num =0;
    foreach ($top as $key ){
        if($key["im:releaseDate"]["label"] < 2000 ){
            print_r("Tên phim: ".$key["im:name"]["label"]." - Năm phát hành: ".$key["im:releaseDate"]["label"]);
            print_r( "\n");
            $num++;
        }

    }
    print_r("Số phim phát hành trước năm 2000 là: ".$num);
    print_r( "\n");

}
function Ex5()
{
    $string = file_get_contents("phim.json", FILE_USE_INCLUDE_PATH);
    $brut = json_decode($string, true);
    $top = $brut["feed"]["entry"];
    $max = null;
    $min = null;
    foreach ($top as $value) {
        $releasedate = ($value['im:releaseDate']['label']);
        $str = (int)substr($releasedate, 0, 4);
        if ($max == null) {
            $max = $str;
        } else {
            if ($str > $max) {
                $max = $str;
            }
        }
        if ($min == null) {
            $min = $str;
        } else {
            if ($str < $min) {
                $min = $str;
            }
        }
    }
    print_r("The oldest film : " . $max . "\n");
    print_r("The recent film : " . $min . "\n");
}
function Ex6(){
    $open_file = file_get_contents('phim.json', FILE_USE_INCLUDE_PATH);
    $decode_file = json_decode($open_file, true);
    $sperate_arr = $decode_file['feed']['entry'];
    //$i=0;
    //foreach ($sperate_arr as $key => $value){
        $array=array($sperate_arr["category"]["attributes"]["label"]);

            //$i++;


        //print_r(array_count_values($value));
   // }//echo $i;
    print_r(array_count_values($array));
    print_r("\n");


}
function Ex8(){
    //Giá bao nhiêu để mua top 10 trên iTunes? hoặc thuê nó?
    $string = file_get_contents("phim.json", FILE_USE_INCLUDE_PATH);
    $brut = json_decode($string, true);
    $top = $brut["feed"]["entry"];
    $topFlims=(int)readLine("Nhập thứ hạng bộ phim: ");

    while ($topFlims <= 100) {
        print_r("Tên phim: ".$top[$topFlims]["im:name"]["label"]." \nGiá để thuê: ".$top[$topFlims]["im:rentalPrice"]["label"]." \nGía bán: ".$top[$topFlims]["im:price"]["label"]);
        print_r("\n");
        break;
    }
   /* $x = 1;
    while ($x <= 10) {
        print_r($top[$x++]["im:name"]["label"]);
        print_r("\n");
    }*/





}
function Ex9(){
    //Tháng có nhiều phim chiếu rạp nhất?
    $string = file_get_contents("phim.json", FILE_USE_INCLUDE_PATH);
    $brut = json_decode($string, true);
    $top = $brut["feed"]["entry"];
    $arrNull=[];
    foreach($top as $key => $value){
        $releasedate = ($value['im:releaseDate']['label']);
        $str = (int)substr($releasedate, 5, 2);
        if(empty($arrNull[$str])){
            $arrNull[$str]=1;
        }else {
            $arrNull[$str]++;
        }
    }
    arsort($arrNull);
    print_r($arrNull);
    print_r("Tháng có phim chiếu rạp nhiều nhất là tháng : ".key($arrNull)."\n");

    }
 function Ex10(){
     //Top 10 bộ phim đáng xem với ngân sách hạn chế là gì?
     $string = file_get_contents("movies.json", FILE_USE_INCLUDE_PATH);
     $brut = json_decode($string, true);
     $top = $brut["feed"]["entry"];

     $money = [];

     foreach ($top as $key => $value){
         $namefilms = $value['im:name']['label'];
         $price =$value['im:price']['label'];
         $price = trim($price,"$");
         $money[$namefilms] = $price;
     }
     asort($money);// Sắp xếp từ thấp đến cao
     print_r("top 10 movies to see with a limited budget : ");
     print_r(array_slice($money,0,10));
 }

 Ex10();



Ex9();
//Ex8();
//Ex6();
//Ex5();
//Ex4();
//Ex3();
//Ex2();
//Ex1();




