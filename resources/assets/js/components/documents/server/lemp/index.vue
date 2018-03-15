<template>
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="text-center">LEMP stack trên Ubuntu 16.04</h1>
      </div>
      <div class="panel-body">
        <h3>Giới thiệu</h3>
        <p>LEMP stack là một nhóm các phần mềm được sử dụng để tạo nên một web server xử lý ngôn ngữ PHP. Nhóm phần mềm này gồm hệ điều hành Linux, phần mềm chạy dịch vụ web server là Nginx. Cơ sở dữ liệu được lưu trữ trên MySQL và ngôn ngữ động PHP.
        </p>

        <h3>Chuẩn bị cài đặt LEMP stack</h3>
        <p>
          Trước khi tiến hành cài đặt, bạn phải chắc chắn rằng bạn có tài khoản root hoặc tài khoản thông thường với quyền sudo. Nếu bạn tạo server ở Vultr, bạn sẽ được cung cấp tài khoản root, bạn có thể kết nối SSH hoặc sử dụng terminal của Vultr.
        </p>
        <p>
          Hãy đăng nhập với quyền như trên vào server. Đầu tiên chúng ta sẽ update server của chúng ta bằng lệnh update:
        </p>
        <code>sudo apt-get update</code>
        <p>
          Việc này sẽ cập nhật lại danh mục các gói cài đặt nội bộ trên server. Trước khi bắt đầu cài đặt bạn nên chạy lệnh update 1 lần lúc đăng nhập vào server. Bây giờ chúng ta hãy bắt đầu cài đặt LEMP Stack!
        </p>


        <h3>Bước 1: Cài đặt Nginx web server</h3>
        <p>
          Web server là nơi xử lý các yêu cầu từ trình duyệt. Nginx là một web server hiện đại và có hiệu năng xử lý cao. Hiện nay rất nhiều hãng tên tuổi cũng sử dụng Nginx cho web server của họ.
        </p>
        <p>
          Hãy chắc chắn rằng bạn đã chạy lệnh update trước khi cài Nginx. Lệnh sau sẽ tự động cài đặt Nginx vào hệ thống.
        </p>
        <code>sudo apt-get -y install nginx</code>
        <p>
          Sau khi cài đặt xong, hãy thử mở trình duyệt và truy cập vào server của bạn để xem kết quả. Nếu bạn chưa có tên miền trỏ về server, bạn có thể thử truy cập bằng IP public của server. <code>curl -4 IP</code>. Khi đã biết địa chỉ IP của server, hãy mở trình duyệt và gõ địa chỉ IP vào kiểm thử.
        </p>

        <h3>Bước 2: Cài đặt Mysql</h3>
        <p>
            Cài đặt mysql bằng lệnh <code>sudo apt-get -y install mysql-server </code>. Bạn sẽ được yêu cầu nhập mật khẩu cho tài khoản root để sử dụng trong hệ thống Mysql. Sau khi cài đặt xong MySQL, chúng ta vẫn chưa sử dụng được vì MySQL cần được cấu hình trước khi sử dụng. Chúng ta sẽ cấu hình một cách bảo mật bằng lệnh sudo <code>mysql_secure_installation</code> Bạn sẽ được yêu cầu nhập mật khẩu root mà bạn đã đặt ở bước trên. Tiếp theo bạn sẽ được hỏi có muốn cấu hình VALIDATE PASSWORD PLUGIN không.
            <span>Lưu ý: VALIDATE PASSWORD PLUGIN là một tính năng kiểm tra mật khẩu có thỏa mãn các tiêu chí đặt ra hay không. Bạn có thể sử dụng hoặc không sử dụng tính năng này. Tuy nhiên hãy luôn sử dụng mật khẩu phức tạp. Nhập y để cấu hình VALIDATE PASSWORD PLUGIN hoặc bất kì kí tự khác để bỏ qua tính năng này.</span>
            <span>Phần còn lại sau câu hỏi này, bạn hãy bấm Y và bấm Enter cho tất cả các câu hỏi còn lại. Việc này sẽ xóa bỏ các tài khoản vô danh, các test database, khóa chức năng đăng nhập từ xa cho tài khoản root và tải một số quy định mới. Như vậy MySQL sẽ ngay lập tức áp dụng các thay đổi mà chúng ta vừa cài đặt. Bây giờ hệ thống database của bạn đã được cài đặt hoàn tất và chúng ta sẽ tiếp tục với việc cài đặt PHP.</span>
        </p>

        <h3>Bước 3: Cài đặt PHP</h3>
        <p>
            Chúng ta đã cài đặt Nginx để làm web server và MySQL để lưu trữ dữ liệu. Tiếp theo của việc cài đặt lemp stack đó là cài đặt PHP để xử lý các trang web động. Một điều lưu ý là Nginx không hỗ trợ xử lý PHP thuần như những web servers khác (Apache, Httpd, v.v…). Chúng ta sẽ cài đặt php-fpm (FastCGI process manager) và cấu hình cho Nginx để truyền các yêu cầu PHP sang FPM xử lý. Chúng ta có thể vừa cài module này và một vài helper package (gói trợ giúp) giúp PHP có thể giao tiếp với cơ sở dữ liệu. Chúng ta dùng lệnh sau <code>sudo apt-get -y install php-fpm php-mysql </code>. 
            Bây giờ chúng ta cần thực hiện cấu hình để server được bảo mật hơn. Hãy mở file cấu hình của php-fpm với quyền 
            <code>root sudo vi /etc/php/7.0/fpm/php.ini </code>Hãy tìm đến thông số <code>cgi.fix_pathinfo</code>, mặc định nó đang được comment bằng dấu hai chấm (😉 và gán giá trị mặc định “1”. Chúng ta sẽ thay đổi bằng cách xóa dấu hai chấm và gán giá trị bằng 0 như sau cgi.fix_pathinfo=0 Lưu file và đóng lại sau khi bạn chỉnh sửa xong. Điều tiếp theo cần làm đó là khởi động lại PHP bằng cách <code>sudo service php7.0-fpm restart</code>
        </p>

        <h3>Bước 4: Cấu hình Nginx và PHP</h3>
        <p>
            Chúng ta đã có tất cả các thành phần cần thiết gồm Nginx, MySQL và PHP. Điều cuối cùng chúng ta cần cấu hình đó là giúp Nginx sử dụng PHP cho các trang web động. Chúng ta sẽ cấu hình trên khối server (server block) của Nginx (các block này tương tự tạo host ảo trên Apache). Hãy mở block mặc định của Nginx bằng cách: <code>sudo vi /etc/nginx/sites-available/default</code> Bạn sẽ thấy nội dung tương tự như thế này (các dòng comment đã được mình bỏ qua)
        </p>
        <pre><code><span class="hljs-section">server</span> {
        <span class="hljs-attribute">listen</span> <span class="hljs-number">80</span> default_server;
        <span class="hljs-attribute">listen</span> [::]:<span class="hljs-number">80</span> default_server;
     
        <span class="hljs-attribute">root</span> /var/www/html;
        <span class="hljs-attribute">index</span> index.html index.htm index.nginx-debian.html;
     
        <span class="hljs-attribute">server_name</span> _;
     
        <span class="hljs-attribute">location</span> / {
            <span class="hljs-attribute">try_files</span> <span class="hljs-variable">$uri</span> <span class="hljs-variable">$uri</span>/ =<span class="hljs-number">404</span>;
        }
    }
    </code></pre>

        <ul>Chúng ta cần thay đổi như sau:
            <li> Đầu tiên chúng ta cần thêm index.php vào giá trị đầu tiên của mục index. Việc này giúp file index.php sẽ được gọi lên khi xử lý một yêu cầu đến thư mục.</li>
            <li>Chúng ta có thể thay đổi mục server_name để trỏ đến tên miền hoặc địa chỉ IP public.</li>
            <li>Chúng ta cần bỏ các dấu comment của phần PHP để Nginx biết cách xử lý các yêu cầu đến file PHP như thế nào. Đây là phần location ~.php$$</li>
            <li>Chúng ta cũng có thể cấu hình chặn các yêu cầu đến file .htaccess. Nginx không hỗ trợ các file này nhưng bạn cũng nên chặn người dùng truy cập đến các file này. Sau khi thay đổi, file cấu hình của chúng ta sẽ có nội dung như sau</li>
        </ul>
        <pre><code><span class="hljs-section">server</span> {
            <span class="hljs-attribute">listen</span> <span class="hljs-number">80</span> default_server;
            <span class="hljs-attribute">listen</span> [::]:<span class="hljs-number">80</span> default_server;
         
            <span class="hljs-attribute">root</span> /var/www/html;
            <span class="hljs-attribute">index</span> index.php index.html index.htm index.nginx-debian.html;
         
            <span class="hljs-attribute">server_name</span> server_domain_or_IP;
         
            <span class="hljs-attribute">location</span> / {
                <span class="hljs-attribute">try_files</span> <span class="hljs-variable">$uri</span> <span class="hljs-variable">$uri</span>/ =<span class="hljs-number">404</span>;
            }
         
            <span class="hljs-attribute">location</span> <span class="hljs-regexp">~ \.php$</span> {
                <span class="hljs-attribute">include</span> snippets/fastcgi-php.conf;
                <span class="hljs-attribute">fastcgi_pass</span> unix:/run/php/php7.0-fpm.sock;
            }
         
            <span class="hljs-attribute">location</span> <span class="hljs-regexp">~ /\.ht</span> {
                <span class="hljs-attribute">deny</span> all;
            }
        }
        </code></pre>

        <p>
            Sau khi chỉnh sửa xong hãy lưu và đóng file lại. Bây giờ hãy kiểm thử xem cấu hình của chúng ta có hợp lệ hay không trước khi chúng ta chạy lại nginx bằng lệnh <code>sudo nginx -t </code> Nếu có lỗi, hãy quay lại và kiểm tra file cấu hình. Bạn hãy đảm bảo rằng không có bất kì lỗi nào ở file cấu hình trước khi chúng ta khởi động lại nginx. Để khởi động lại nginx chúng ta dùng lệnh <code>sudo service nginx reload</code>
        </p>

        <h3>Bước 5: Tạo file PHP kiểm tra</h3>
        <p>
            Chúc mừng bạn đã cài đặt xong LEMP Stack, việc cuối cùng mà chúng ta cần làm đó là tạo một file PHP kiểm thử xem cấu hình đã đúng hết chưa. Bây giờ hãy tạo mới file info.php ở thư mục web gốc bằng cách <code>sudo vi /var/www/html/info.php</code> Nội dung của file info.php như sau
        </p>
        <pre><code>&lt;?<span class="hljs-function">php
<span class="hljs-title">phpinfo</span><span class="hljs-params">()</span></span>;
        </code></pre>

        <p>Lưu và đóng file lại. Bây giờ bạn hãy thử dùng trình duyệt truy cập vào địa chỉ đến file này để kiểm tra thử http://server_name/info.php hoặc http://ip_address/info.php Nếu bạn nhìn thấy thông tin dưới đây thì xin chúc mừng bạn đã cài đặt hoàn tất</p>
      </div>
    </div>
  </div>
</template>
<style type="text/css">
    p{
        line-height: 1.65;
        color: #0b1a33;
        font-size: 16px;
    }
    h3 {
        color: #000;
    }
    pre {
        background: #000 !important; 
        color: #fff !important;
    }
    .hljs-attribute {
        color: #98c379;
    }
    .hljs-section {
        color: #e06c75;
    }
    .hljs-number {
        color: #d19a66;
    }
    .hljs-title{
        color: #61aeee
    }
</style>