<template>
  <div class="col-md-10 col-md-offset-2 main">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="text-center">Command line in Linux</h1>
      </div><!-- End panel heading -->
      <div class="panel-body">
        <h1>Các lệnh quản lý tiến trình trong Linux</h1>
        <p>Trong hệ điều hành linux, giao diện dòng lệnh là một thế mạnh của hệ điều hành này, nó hổ trợ người sử dụng máy tính làm việc nhanh và chuyên nghiệp hơn. Khi thực hiện một dòng lệnh thì tương ứng một tiến trình được tạo ra do hệ điều hành quản lý để thực hiện công việc. Bài viết này sẽ hướng dẫn cách chúng ta quản lý các tiến trình đang thực hiện trên nền tảng hệ điều hành ubuntu</p>

        <h3>Các lệnh dùng để hiển thị danh sách các tiến trình</h3>
        <p>Lệnh cơ bản nhất để hiển thị các tiến trình đang sử dụng là ps. Khi thực hiện nó sẽ cung cấp cho chúng ta thông tin của các tiến trình đang được thực hiện bao gồm cả ID và tỉ lệ chiếm dụng CPU của tiến trình. Khi chúng ta sử dụng các lệnh liên quan đến danh sách các tiến trình, thông thường số lượng hiển thị các tiến trình thường chiếm hết màn hình câu lệnh vì vậy chúng ta cần chú ý các thông số để tùy chỉnh chế độ hiển thị của màn hình dòng lệnh.</p>
        
        <h4>a. Lệnh ps và cách sử dụng lệnh ps </h4>
        <pre><code>$ ps aux | less</code></pre>
        <p>Để xem tất cả các tiến trình của hệ điều hành</p>
        <pre><code>$ ps -A; $ ps -e</code></pre>
        <p>Để xem các tiến trình chạy của người dùng root</p>
        <pre><code> ps -U root -u root -N</code></pre>
        <p>Để xem các tiến trình chạy bởi người dùng abc</p>
        <pre><code>ps -u abc</code></pre>

        <h4>b. Lệnh top</h4>
        <p>Dùng để  hiển thị danh sách các tiến trình với đầy đủ thông tin. Kết quả chúng ta sẽ thấy được một danh sách động các tiến trình của hệ điều hành và thông tin chi tiết của chúng. Muốn thoát khỏi dùng phím q</p>
        <p>Bạn có thể lưu lại danh sách tiến trình của lệnh top sang một tập tin .log</p>
        <pre><code>top -b -n1 > /tmp/process.log</code></pre>

      </div><!-- End panel-body -->
    </div><!-- End panel main -->
  </div>
</template>