<template>
  <div class="col-md-10 col-md-offset-2 main">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="text-center">Phân quyền trong linux</h1>
      </div>
      <div class="panel-body">
        <h2>Giới thiệu</h2>
        <p>Một trong những thành phần chính của hệ điều hành Linux là hệ thống quyền hạn truy cập (permission) áp dụng cho mọi đối tượng (file, thư mục, link…). Hệ thống này đóng 1 vai trò quan trọng trong việc đem lại mức an ninh cao cho Linux.</p>
        
        <h2>Chi tiết</h2>
        <p>Mỗi 1 đối tượng gắn với 3 loại quyền: read (đọc), write (sửa đổi) và execute (thực thi). Và mỗi quyền này lại được chỉ định cho 3 loại user:</p>
        <ul>
          <li><strong>owner</strong>: chủ sở hữu của đối tượng – mặc định ban đầu là user tạo ra đối tượng đó.</li>
          <li><strong>group</strong>: 1 nhóm các user có các quyền hạn giống nhau đối với đối tượng – mặc định ban đầu là group mà owner ở trên thuộc về.</li>
          <li><strong>other</strong>: tất cả các user không thuộc 2 nhóm trên</li>
        </ul>

        <h2>Ý nghĩa của 3 loại quyền</h2>
        <h3>Đối với thư mục</h3>
        <ul>
          <li><strong>Read</strong>: chỉ cho phép sử dụng lệnh ls để xem tên các đối tượng có trong thư mục, nếu muốn xem thêm các thông tin như: kích thước, quyền hạn truy cập, chủ sở hữu, ngày khởi tạo… bạn cần cấp thêm cho thư mục quyền execute.</li>
          <li><strong>Write</strong>: cho phép tạo và xóa các đối tượng trong thư mục.</li>
          <li><strong>Execute</strong>: chỉ cho phép di chuyển vào thư mục sử dụng lệnh <strong>cd</strong>.</li>
        </ul>

        <h3>Đối với file</h3>
        <ul>
          <li><strong>Read</strong>: cho phép xem nội dung của file. </li>
          <li><strong>Write</strong>: cho phép chỉnh sửa nội dung, xóa file.</li>
          <li><strong>Excute</strong>: cho phép chạy file, quyền này thường được gán các file nhị phân thực thi (tương tự như file .exe trong Windows).</li>
        </ul>
        <p>User root có đủ cả 3 quyền đối với mọi đối tượng trên hệ thống. Ngoài ra, root có thể thay đổi (cấp hoặc tước) quyền hạn truy cập đối tượng cho bất kỳ user nào và còn có thể chuyển quyền sở hữu đối tượng qua lại giữa các user.</p>

        <h2>Các quyền trên được ký hiệu như sau:</h2>
        <ul>
          <li><strong>Read</strong>: ký hiệu là <strong>r</strong> hoặc <strong>4</strong></li>
          <li><strong>Write</strong>: ký hiệu là <strong>w</strong> hoặc <strong>2</strong></li>
          <li><strong>Execute</strong>: ký hiệu là <strong>x</strong> hoặc <strong>1</strong></li>
        </ul>

        <h2>Biểu diễn quyền hạn của đối tượng</h2>
        <h3>Cách 1: bao gôm 1 chuỗi 10 ký tự:</h3>
        <ul>
          <li>Ký tự đầu thể hiện loạ file: <strong>d</strong> cho thư mục, <strong>-</strong> cho file thông thường,
           <strong>l</strong> cho các link (hard link, symbolic link)
          </li>
          <li>9 ký tự tiếp theo: 3 cho <strong>owner</strong>, 3 cho <strong>group</strong>, 3 cho <strong>other</strong></li>
          <li>mỗi cụm 3 ký tự sẽ theo thứ tự là: <strong>rwx</strong>: vị trí các bit mang giá trị deny được biểu diễn bằng dấu <strong>-</strong></li>
        </ul>
        <h3>Cách 2: Bao gồm 3 số hệ bát phân</h3>
        <p>Số đầu cho owner, số 2 cho group, số 3 cho other</p>
        <ul>
          <li><span class="label-span">0:</span> cấm tất cả</li>
          <li><span class="label-span">1:</span> execute(x)</li>
          <li><span class="label-span">2:</span> write(w)</li>
          <li><span class="label-span">3=1+2:</span> execute + write(wx)</li>
          <li><span class="label-span">4:</span> read(r)</li>
          <li><span class="label-span">5=1+4:</span> read + execute(rx)</li>
          <li><span class="label-span">6=2+4:</span> write + read (rw)</li>
          <li><span class="label-span">7=1+2+4:</span> execute + write + read (rwx)</li>
        </ul>

        <h3>Lệnh</h3>
        <p>Để thay đổi quyền hạn lên đối tượng cho các user sử dụng lệnh chmod (bạn phải là owner của file hặc có quyền root)</p>
        <p>Để thay đổi owner cho đối tượng sử dụng lệnh chown (bạn phải có quyền root)</p>
        <p>Để thay đổi group cho đối tượng sử dụng lệnh chgrp</p>

        <h3>Thông tin file</h3>
        <div class="container"><div class="line number1 index0 alt2"><code class="plain plain">-rw-rw-r--&nbsp;&nbsp;&nbsp;&nbsp; 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; van&nbsp;&nbsp;&nbsp; van&nbsp; 0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sep 21 19:47 testfile</code></div><div class="line number2 index1 alt1"><code class="plain plain">drwxrwxr-x&nbsp;&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; van&nbsp;&nbsp;&nbsp; van&nbsp; 4096&nbsp;&nbsp; Sep 21 19:47 testfolder</code></div><div class="line number3 index2 alt2"><code class="plain plain">__________________________________________^-- Ngày tháng tạo ra file và tên file</code></div><div class="line number4 index3 alt1"><code class="plain plain">^ ^&nbsp; ^&nbsp; ^&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ^&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ^&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ^&nbsp;&nbsp;&nbsp; ^</code></div><div class="line number5 index4 alt2"><code class="plain plain">| |&nbsp; |&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp; \--- Dung lượng của file/folder</code></div><div class="line number6 index5 alt1"><code class="plain plain">| |&nbsp; |&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \-------- Tên group sở hữu</code></div><div class="line number7 index6 alt2"><code class="plain plain">| |&nbsp; |&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \--------------- Tên user sở hữu</code></div><div class="line number8 index7 alt1"><code class="plain plain">| |&nbsp; |&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \---------------------- Số này khó giải thích, bỏ qua vì không quan trọng</code></div><div class="line number9 index8 alt2"><code class="plain plain">| |&nbsp; |&nbsp; |</code></div><div class="line number10 index9 alt1"><code class="plain plain">| \--\--\----------------------------- Các chỉ số phân quyền</code></div><div class="line number11 index10 alt2"><code class="plain plain">\------------------------------------- Loại file (chữ d nghĩa là thư mục)</code></div></div>
      </div> <!-- end panel body -->
    </div>
  </div>
</template>

<style>
  strong {
    color: #c72020;
  }
  .label-span {
    font-weight: bold;
  }
</style>