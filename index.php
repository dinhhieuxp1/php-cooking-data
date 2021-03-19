<?php
//$string = file_get_contents ( "dictionnaire.txt" , FILE_USE_INCLUDE_PATH );
//$Dico = explode( "\ n" , $string );
function menu()
{
    echo "Chọn 1: Hiển thị từ điển này chứa bao nhiêu từ?" . "\n";
    echo "Chọn 2: Hiển thị có bao nhiêu từ có đúng 15 ký tự?" . "\n";
    echo "Chọn 3: Hiển thị có bao nhiêu từ chứa ký tự 'w'?" . "\n";
    echo "chọn 4: Hiển thị có bao nhiêu từ kết thúc bằng chữ 'q'?" . "\n";
    echo "chọn 5: EXIT" . "\n";

}
function Ex1(){
   /** $string = file_get_contents ( "dictionnaire.txt" , FILE_USE_INCLUDE_PATH );
    var_dump($string);

    echo "Số từ trong tệp là : " .(str_word_count($string));
    echo "\n";

    chon();*/

    $string = file_get_contents ( "dictionnaire.txt" , FILE_USE_INCLUDE_PATH );

    $Dico=explode( "\n" , str_word_count($string ));
    print_r("Số từ trong tệp là: \n");
    print_r($Dico);
    chon();
}
function Ex2(){
    $string = file_get_contents ( "dictionnaire.txt" , FILE_USE_INCLUDE_PATH );
    $data=explode("\n",$string);
    $data0=(int)readLine("Nhập số ký tự của từ cần tìm:");
    $num =0;
    foreach ($data as $key ){
        if(strlen($key)==$data0){
            print_r($key);
            echo "\n";
            $num++;
        }

    }
    echo $num;
chon();
}
function Ex3(){
    $string = file_get_contents ( "dictionnaire.txt" , FILE_USE_INCLUDE_PATH );
    $data=explode("\n",$string);

    $num =0;
    foreach ($data as $key ){
        if(strpos($key,'w')==true ){
            print_r($key);
            echo "\n";
            $num++;
        }

    }
    echo $num;
chon();
}
function Ex4(){$string = file_get_contents ( "dictionnaire.txt" , FILE_USE_INCLUDE_PATH );
    $data=explode("\n",$string);

    $num =0;
    foreach ($data as $key ){
        if(strripos($key,'q')==true){
            print_r($key);
            echo "\n";
            $num++;
        }

    }
    echo $num;
chon();
}

function chon(){
  menu();
  $reply=(int)readLine("Mời bạn chọn: ")."<br />";
    Switch($reply){
        case 1:
            Ex1();
            break;
        case 2:
            Ex2();
            break;
        case 3:
            Ex3();
            break;
        case 4:
            Ex4();
            break;
        case 5:
            die();

        default :
            echo "Sai cú pháp , Mời thử lại"."\n";
            chon();
    }

}

chon();

