#  Dữ liệu nấu ăn với PHP!

! [ Thời gian nấu ăn ] (cook-time.jpg)

##  Từ điển

Trước tiên, hãy tải xuống từ điển tiếng Pháp và sau đó tải nó vào mã của bạn:

`` php
$ string = file_get_contents ("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$ dico = boom ("\ n", $ string);
``

Kết quả là một mảng chứa tất cả các từ.

###  Bài tập

* Từ điển này chứa bao nhiêu từ?
* Có bao nhiêu từ có đúng 15 ký tự?
* Có bao nhiêu từ chứa ký tự 'w'?
* Có bao nhiêu từ kết thúc bằng chữ 'q'?


##  Danh sách phim

Tải xuống 100 bộ phim hàng đầu được xem ở Hoa Kỳ trên nền tảng iTunes.

`` php
$ string = file_get_contents ("phim.json", FILE_USE_INCLUDE_PATH);
$ crazy = json_decode ($ string, true);
$ top = $ blank ["nguồn cấp dữ liệu"] ["entry"]; # danh sách phim
``

###  Bài tập

* Hiển thị 10 phim hàng đầu ở dạng này:

``
1 Mission: Impossible - Rogue Nation
2…
…
10…
``

* Thứ hạng của phim "Trọng sinh"?
* Đạo diễn của "The LEGO Movie" là gì?
* Có bao nhiêu bộ phim đã được phát hành trước năm 2000?
* Bộ phim gần đây nhất là gì? Già nhất?
* Thể loại phim tiêu biểu nhất là gì?
* Đạo diễn nào có mặt nhiều nhất trong top100?
* Sẽ tốn bao nhiêu để mua top 10 trên iTunes? hoặc thuê nó?
* Tháng nào có nhiều phim chiếu rạp nhất?
* Đâu là 10 bộ phim đáng xem nhất với kinh phí hạn hẹp?