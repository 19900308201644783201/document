<template>
  <div class="col-md-10 col-md-offset-2 main">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="text-center">Create vitual host in nginx</h1>
      </div>
      <div class="panle-body">
        <h3>Tạo cây thư mục cho web site mới</h3>
        <pre><code>$ mkdir -p /var/www/ducxinhdemo/{public_html,logs}
$ mkdir -p /var/www/ducxinhreal/{public_html,logs}</code></pre>
        <pre><code>
$ echo "<?php echo 'Welcome to ducxinh demo';" > /var/www/ducxinhdemo/public_html/index.php
$ echo "<?php echo 'Welcome to ducxinh real';" > /var/www/ducxinhreal/public_html/index.php</code></pre>
        <p>Lệnh trên sẽ tạo ra 3 thư mục cùng lúc. bạn có thể vứt file config.default vào thư mục backup cho gọn</p>

        <p>Phân quyền quản lý thư mục</p>
        <pre><code>$ sudo chown -R $USER:$USER /var/www
sudo chmod -R 755 /var/www</code></pre>
        <p>Câu lệnh sẽ giao quyền quản lý thư mục /var/wwww cho user /Users/Xinhnguyen.</p>

        <h3>Tạo vitual host</h3>
        <h4>File /etc/nginx/sites-available/ducxinhdemo</h4>
        <pre><code>server {

listen 80;
listen [::]:80;

server_name ducxinhdemo.com www.ducxinhdemo.com;

#access_log /var/www/ducxinhdemo/logs/access.log;
#error_log /var/www/ducxinhdemo/logs/error.log;

root /var/www/ducxinhdemo/public_html;
index index.php index.html index.htm;

#
location / {
    try_files $uri $uri/ /index.php?$args;
}
#

include   /usr/local/etc/nginx/conf.d/php-fpm;
}</code></pre>
        <h4>File /etc/nginx/sites-available/ducxinhreal như sau:</h4>
        <pre><code>server {

listen 80;
listen [::]:80;

server_name ducxinhreal.com www.ducxinhreal.com;

#access_log /var/www/ducxinhreal/logs/access.log;
#error_log /var/www/ducxinhreal/logs/error.log;

root /var/www/ducxinhreal/public_html;
index index.php index.html index.htm;

#
location / {
    try_files $uri $uri/ /index.php?$args;
}
#

include   /usr/local/etc/nginx/conf.d/php-fpm;
}</code></pre>

      <h4>Check file /etc/nginx/nginx.conf</h4>
      <pre><code>
worker_processes  1;

error_log  /usr/local/etc/nginx/logs/error.log debug;

events {
    worker_connections  1024;
}

http {
    include             mime.types;
    default_type        application/octet-stream;

    # later
    server_names_hash_bucket_size 64;
    log_format  main  '$remote_addr - $remote_user [$time_local] "$request" '
                      '$status $body_bytes_sent "$http_referer" '
                      '"$http_user_agent" "$http_x_forwarded_for"';

    access_log  /usr/local/etc/nginx/logs/access.log  main;

    sendfile            on;

    keepalive_timeout   65;

    index index.html index.php;

    include /usr/local/etc/nginx/sites-enabled/*;
}</code></pre>

      <p>Toàn bộ virtualhost được bao trong block server.</p>
      <p><strong>Listen</strong>: xác định IP và port lắng nghe request đến website, port 80 là giá trị mặc định.</p>
      <p><strong>server_name</strong>: gán hostname cho website, ở đây mình đặt hostname là ducxinhdemo.com</p>
      <p><strong>access_log</strong>: nếu đã đọc phần I cơ bản về nginx bạn sẽ thấy chỉ thị access_log đã được khai báo trước đó trong block http (block cha của block server). Việc khai báo trong block server sẽ vô hiệu hóa chỉ thị access_log trong http và quy định lại đường dẫn đến file ghi log truy cập mới. Theo mình mỗi virtual host bạn cấu hình log riêng để dễ quản lý, giờ bạn có thể xóa chỉ thị access_log ngoài block http đi cho đỡ rối</p>
      <p><strong>error_log</strong>: quy định đường dẫn đến file ghi log lỗi, cũng tương tự access_log bạn xem lại file /etc/nginx/nginx.conf để cài đặt log cho phù hợp.</p>
      <p><strong>root</strong>: chỉ định đường dẫn đến source code của trang web</p>
      <p><strong>index</strong>: các file nginx sẽ xử lý</p>

      <h3>Enable your Server Blocks and Restart Nginx</h3>
      <p>Now that we have our server block files, we need to enable them. We can do this by creating symbolic links from these files to the sites-enabled directory, which Nginx reads from during startup.</p>

      <p>We can create these links by typing:</p>
      <pre><code>
$ sudo ln -s /etc/nginx/sites-available/ducxinhdemo /etc/nginx/sites-enabled/
$ sudo ln -s /etc/nginx/sites-available/ducxinhreal /etc/nginx/sites-enabled/</code></pre>

      <p>These files are now in the enabled directory. We now have three server blocks enabled, which are configured to respond based on their listen directive and the server_name (you can read more about how Nginx processes these directives here):</p>
      <p>example.com: Will respond to requests for example.com and www.example.com</p>
      <p>test.com: Will respond to requests for test.com and www.test.com</p>
      <p>default: Will respond to any requests on port 80 that do not match the other two blocks</p>

      <p>In order to avoid a possible hash bucket memory problem that can arise from adding additional server names, we will go ahead and adjust a single value within our /etc/nginx/nginx.conf file. Open the file now:</p>

      <pre><code>
$ sudo vim /etc/nginx/nginx.conf
</code></pre>
      <p>Within the file, find the server_names_hash_bucket_size directive. Remove the # symbol to uncomment the line</p>
      <pre><code>http {
  server_names_hash_bucket_size 64;
}</code></pre>
      <p>Save and close the file when you are finished</p>
      <p>Next, test to make sure that there are no syntax errors in any of your Nginx files</p>
      <pre><code>$ sudo nginx -t</code></pre>

      <p>If no problems were found, restart Nginx to enable your changes</p>
      <pre><code>$ sudo systemctl restart nginx</code></pre>

      <h3>Modify Your Local Hosts File for Testing</h3>
      <p>sudo vim /etc/hosts</p>
      <p>Add these line into host file</p>
      <pre><code>
123.123.123.123 ducxinhdemo.com www.ducxinhdemo.com
123.123.123.123 ducxinhreal.com www.ducxinhreal.com</code></pre>
      <h4>Test your Results</h4>
      <pre><code>$ curl -4 ducxinhreal.com
$ curl -4 ducxinhdemo.com</code></pre>

      <p>https://www.digitalocean.com/community/tutorials/how-to-set-up-nginx-server-blocks-virtual-hosts-on-ubuntu-16-04</p>
      </div>
    </div>
  </div>
</template>