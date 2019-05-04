<template>
  <div class="col-md-10 col-md-offset-2 main">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="text-center">Nginx</h1>
      </div>
      <div class="panel-body">
        <p>LEMP là viết tắt của Linux, Engine X(Nginx), MariaDB, PHP(PHP-FPM). Được ra đời từ năm 2002</p>

        <p>Quả thực Nginx khác biệt rất nhiều: Nginx được viết hoàn toàn bằng ngôn ngữ C, Nginx phân biệt nội dung tĩnh và nội dung động xử lý các request tĩnh và chuyển các request động về Backend Server làm việc, giảm tiêu tốn tài nguyên xử lý request bằng việc dùng Socket thay cho Thread, các module được thêm vào trong quá trình biên dịch Nginx… đây chỉ là một trong những cái mới làm cho Nginx chạy nhanh hơn Apache, giúp tăng tốc Web Server.</p>

        <h2>Cấu hình của Nginx</h2>
        <p>Nginx cấu hình theo <strong>Directive</strong> và <strong>Block</strong> mình gọi nôm na là chỉ thị và các khối. Chúng có thể nằm lồng ghép vào nhau. Những directive không phụ thuộc block nào mình nhóm lại gọi là <strong>Main block</strong> những setting trên directive này ảnh hưởng đến toàn server</p>

        <p>Nếu một directive nằm trong block nào đó thì nó có ý nghĩa trong block đó và các block con bên trong, khi directive được định nghĩa lại trong block con thì nó chỉ có tác dụng trong block con đó.
Trên đây là những quy tắc quan trọng khi cấu hình nginx bạn cần nắm được, giờ chúng ta đi vào chi tiết nhé.</p>

        <pre><code> <span class="red">MAIN BLOCK</span>
User nginx;
worker_processes 1;

error_log /var/log/nginx/error.log warn;
pid       /var/run/nginx.pid
<hr>
<span class="red">EVENT BLOCK</span>
events {
  worker_connections 1024;
}
<hr>
<span class="red">http block</span>
http {
  include /etc/nginx/mime.types;
  default_type application/octet-stream;
  log_format  main  '$remote_addr - $remote_user [$time_local] "$request" '
                      '$status $body_bytes_sent "$http_referer" '
                      '"$http_user_agent" "$http_x_forwarded_for"';'

  access_log /var/log/nginx/access.log main;

  sendfile  on;
  #tcp_nopush on;
  keepalive_timeout 65;

  #gzip on;
  include /etc/nginx/conf.d/*.conf;
}
</code></pre>

        <h2>3.1 MAIN BLOCK</h2>
        <p>Các chỉ thị chính trong block này.</p>
        <p>User nginx: chỉ thị này quy định worker processes bên dưới được chạy với tài khoản nginx.</p>
        <p>worker_processes: cấu hình chỉ ra rằng web server được xử lý chỉ bằng 1 CPU Core(Processor), giá trị này tương ứng với số CPU Core có trên máy chủ. Để kiểm tra số lượng CPU Core trên VPS hay máy chủ riêng bạn dùng nproc, muốn chi tiết hơn dùng lệnh cat /proc/cpuinfo.</p>

        <p>error_log: đường dẫn đến file log lỗi của nginx server.</p>

        <p>pid: số PID của master process, nginx dùng master process để quản lý worker process </p>
        
        <h2>3.2 EVENTS BLOCK</h2>
        <p>Mặc định nó có duy nhất một chỉ thị.</p>
        <p>worker_connections: giá trị của nó liên quan đến worker processes, 1024 nghĩa là mỗi worker process sẽ chịu tải là 1024 kết nối cùng lúc. Nếu bạn có 2 worker process thì khả năng chịu tại của server sẽ là 2048 kết nối tại một thời điểm. Giá trị này bạn thay đổi tùy thuộc vào hardware của máy chủ không cứ phải 1024/worker process đâu nhé.</p>

        <h2>3.3 HTTP BLOCK</h2>
        <p>Đây là block chúng ta làm việc nhiều nhất, có 3 loại block nằm bên trong là http, server, location. Như đã nói bên trên, trong block http có thể có các block http khác, trong bài này mình sẽ tập trung nói về block http trong file nginx.conf còn block serrver và location mình sẽ nói rõ hơn trong phần 2 khi cấu hình virtualhost tạo các website mới.

        <p>include: directive này gọi tới file mime.types chứa danh sách các file extensions trong /etc/nginx, giá trị mặc định là application/octet-stream;</p>

        <p>log_format: đinh nghĩa một mẫu log có tên là main được sử dụng bởi access_log, các thông tin được ghi vào file log tương ứng với giá trị các biến $remote_addr, $remote_user, $time_local, $request …</p>

        <p>access_log: chỉ là đường dẫn đến file log /var/log/nginx/access.log với template main được định nghĩa ở trên.</p>

        <p>sendfile: chỉ thị này gọi đến function sendfile để xử lý việc truyền file, đọc docs trên nginx.org mình cũng chưa hiểu rõ directive này, giá trị mặc định trên nginx 1.9.12 là on.</p>

        <p>Keepalive_timeout: xác định thời gian server chờ trước khi đóng một kết nối, giá trị mặc định là 65 giây.</p>

        <p>Cuối cùng là một chỉ thị include khác rất quan trọng để gọi các file cấu hình nằm trong /etc/nginx/conf.d/, đây là nhóm file cấu hình Virtualhost cho Web Server.</p>
      </div>
    </div>
  </div>
</template>
<style type="text/css">
  .red {
    color:red;
  }
</style>