<template>
  <div class="row">
    <div class="container">

      <div class="col-xl-9 offset-xl-0 col-lg-10 offset-lg-1">
        <div class="post-content-wrapper">
          <div class="post-meta">
            <h1 class="is-markdown-title">Introduce About SCSS</h1>
          </div><!-- End post-meta -->

          <div class="md-contents post-content">

               <h2>MongoDB là gì?</h2>
        <p>- MongoDB là một hệ quản trị cơ sở dữ liệu mã nguồn mở được viết bằng C++ thuộc NoSQL. Nó được thiết kế theo kiểu hướng đối tượng, các bảng trong MongoDB được cấu trúc rất linh hoạt, cho phép các dữ liệu lưu trữ trên bảng không cần tuân theo một cấu trúc nhất định nào cả (điều này rất thích hợp để làm big data).</p>
        <p>- MongoDB lưu trữ dữ liệu theo hướng tài liệu (document), các dữ liệu được lưu trữ trong document kiểu JSON nên truy vấn sẽ rất nhanh.</p>
        <p>Nếu như bạn biết sử dụng JSON thì trong MongoDB cũng có cấu trúc lưu trữ tương tự, chính vì thế nó có hiệu suất cao, tương tác nhanh và khả năng mở rộng tốt</p>
        
        <h4>Database là gì?</h4>
        <p>Database là gì?
        Database là một Ô chứa dữ liệu ở mức vật lý (physical), mỗi database sẽ có nhiều collection và được thiết lập lưu trữ ở một nơi trong máy chủ máy tính. Một máy chủ MongoDB thường có thể tạo nhiều cơ sở dữ liệu.</p>
        
        <h4>Collection là gì?</h4>
        <p>Collection trong MongoDB là nhóm các tài liệu (document), nó tương đương với một bảng (table) trong CSDL thông thường nên mỗi collection sẽ thuộc về một database duy nhất. Tuy nhiên nó có một sực khác biệt đó là nó không có ràng buộc Relationship như các hệ quản trị CSDL khác nên việc truy xuất rất nhanh, chính vì thế mỗi collection có thể chứa nhiều thể loại khác nhau không giống như table trong hệ quản trị mysql là các field cố định.</p>

        <h4>Document là gì?</h4>
        <p>Document trong MongoDB có cấu trúc tương tự như kiểu dữ liệu JSON, nghĩa là sẽ có các cặp (key => giá trị) nên nó có tính năng động rất lớn. Document ta có thể hiểu nó giống như các record dữ liệu trong MYSQL, tuy nhiên nó có sự khác biệt là các cặp (key => value) có thể không giống nhau ở mỗi document. </p>

        <h2>Các lưu ý khi thiết kế lược đồ MongoDB</h2>
        <p>Khi thiết kế CSDL thì MongoDB không giống như trong MySQL nên cần cân nhắc </p>
        <ul>
          <li>Cấu trúc theo yêu cầu của người dùng (khách hàng)</li>
          <li>Kết hợp chung vào chung một document nếu nó có dính líu với nhau. Nếu không tách chúng ra và truy vấn nhiều lần để lấy kết quả theo mong muốn</li>
          <li>Dupplicate data (nhân đôi dữ liệu) ở mức hạn chế vì năm 2015 vấn đề dung lượng lưu trữ không quan trọng nữa mà họ chỉ quan tâm tới tốc độ truy vấn</li>
          <li>Thực hiện JOIN trong khi insert, không thể JOIN khi select được.</li>
          <li>Tối ưu hóa CSDL cho các trường hợp thường xuyên sử dụng</li>
        </ul>

        <h2>Ưu điểm của mongoDB</h2>
        <ul>
            <li>Schema linh hoạt: Do MongoDB sử dụng lưu trữ dữ liệu dưới dạng Document JSON nên mỗi một collection sẽ các các kích cỡ và các document khác nhau</li>
            <li>Cấu trúc đối tượng rõ ràng: Tuy rằng cấu trúc của dữ liệu là linh hoạt nhưng đối tượng của nó được xác định rất rõ ràng.</li>
            <li>ử dụng bộ nhớ nội tại, nên truy vấn sẽ rất nhanh</li>
            <li>MongoDB rất dễ mở rộng.</li>
            <li>Không có các join: Điều này cũng góp phần tạo nên tốc độ truy vấn cực nhanh trên mongoDB.</li>
            <li>MongoDB phù hợp cho các ứng dụng realtime.</li>
        </ul>

        <h2>Nhược điểm của mongoDB</h2>
        <ul>
            <li>MongoDB không có các tính chất ràng buộc như trong RDBMS nên khi thao tác với mongoDB thì phải hết sức cẩn thận</li>
            <li>MongoDB sử dụng sẽ hao tốn tài nguyên của hệ thống nhiều hơn RDBMS. Nhưng đến thời điểm hiện tại thì vấn đề này không còn là điều lo ngại nữa (Máy giờ trâu bò lắm rồi)</li>
        </ul>
        

        <h2>Khi nào sử dụng MongoDB</h2>
        <p>MongoDB thật sự rất hot nhưng không phải lúc nào ta sử dụng nó cũng tốt, có những trường hợp không nên sử dụng và nên sử dụng, chi tiết thế nào thì chúng ta cùng thảo luận nhé</p>
        <ul>
          <li>- Nếu website của bạn có tính chất INSERT cao, bởi vì mặc định MongoDB có sẵn cơ chế ghi với tốc độ cao và an toàn.</li>
          <li>- Website của bạn ở dạng thời gian thực nhiều, nghĩa là nhiều người thao tác với ứng dung. Nếu trong quá trình load bị lỗi tại một điểm nào đó thì nó sẽ bỏ qua phần đó nên sẽ an toàn</li>
          <li>- Website bạn có nhiều dữ liệu quá, giả sử web bạn có đến 10 triệu records thì đó là cơn ác mộng với MYSQL. Bởi vì MongoDB có khả năng tìm kiến thông tin liên quan cũng khá nhanh nên trường hợp này nên dùng nó.</li>
          <li>- Máy chủ không có hệ quản trị CSDL, trường hợp này thường bạn sẽ sử dụng SQLITE hoặc là MongoDB</li>
        </ul>


        <h2>So sánh Mysql and MongoDB</h2>
        <p>Trong các loại RDBMS đều có khái niệm table (bảng) và mỗi table sẽ có các thông tin (column) xác định, có nghĩa bạn không thể chỉnh sửa cấu trúc lưu trữ của một table được. 
        Nhưng với MongoDB thì lại khác, các collection (table trong MySQL) lưu trữ trong MongoDB có sự linh động và cấu trúc có thể khác nhau, nghĩa là một collection bạn có thể lưu hai loại dữ liệu hoàn toàn khác nhau (theo node).</p>

        <h4>Thiết kế trong Mysql and MongoDB</h4>

        <p><strong>Trường hợp RDBMS: </strong> có các table, nên khi truy vấn ta sẽ join các bảng lại với nhau để lấy thông tin</p>
        <pre><code>
<span>- posts(id, title, description, url, likes, post_by)</span>
<span>- tag_list(id, post_id, tag)</span>
<span>- comment(id, post_id, by_user, message, data_time, likes)</span>
</code></pre>

        <p><strong>Trường hợp MongoDB</strong>: Ta sẽ có 1 collection tên post có cấu trúc như sau:</p>
        <pre><code>
{
   <span>_id: ObjectId(7df78ad8902c)</span>
   <span>title: 'What is the MongoDb',</span>
   <span>description: 'MongoDB  NO-SQL',</span>
   <span>by: POST_BY,</span>
   <span>url: URL_OF_POST,</span>
   <span>tags: [TAG1, TAG2, TAG3],</span>
   <span>likes: TOTAL_LIKES,</span>
   <span>comments: [</span>
      {
         <span>user:'COMMENT_BY',</span>
         <span>message: TEXT,</span>
         <span>dateCreated: DATE_TIME,</span>
         <span>like: 1</span>
      },
      {
         <span>user:'COMMENT_BY',</span>
         <span>message: TEXT,</span>
         <span>dateCreated: DATE_TIME,</span>
         <span>like: 2</span>
      }
   ]
}          
</code></pre>
        <p>Trong đó ta thấy key _id là do hệ thống tự tạo ra một field như vậy làm khóa chính. Đây là cấu trúc của một mẫu document trong MongoDB, như vậy khi có thêm comment thì ta sẽ thêm nó vào phần comment của tin.</p>
        

        <p><strong>Trường hợp RDBMS: </strong></p>
        <pre><code>
<span>- product(id, name, price, status)</span>
<span>- product_image(id, image_path, product_id)</span>
</code></pre>

        <p><strong>Trường hợp MongoDB</strong>: Ta sẽ có 1 collection tên product có cấu trúc như sau:</p>
        <pre><code>
{
   <span>_id: ObjectId(7df78ad8902c)</span>
   <span>name: 'product name',</span>
   <span>price: 50000,</span>
   <span>status: 0,</span>
   <span>image: [</span>
      <span>{"image_path": "image url1"},</span>
      <span>{"image_path": "image url2"},</span>
      <span>{"image_path": "image url3"},</span>
   ]
}
</code></pre>
    <p><strong>Trường hợp MongoDB</strong></p>
<pre><code>
{
  <span>"_id": 1001,</span>
  <span>"title": 'welcome to MongoDB',</span>
  <span>"course_id": 1,</span>
  <span>"duration_in_sec": 1707,</span>
  <span>"lectures": [</span>
    {
      <span>"id": 10101,</span>
      <span>"title": "welcome and thanks for comming",</span>
      <span>"video_url": "https://s3.amazonaws.com/../welcome.mp4",</span>
      <span>"duration_in_sec": 380</span>
    },
    {
      <span>"id": 10102,</span>
      <span>"title": "Lynux install MongoBD",</span>
      <span>"video_url": "https://s3.amazonaws.com/../install mongoDB.mp4",</span>
      <span>"duration_in_sec": 307</span>
    }
  ]
}
</code></pre>
        <p><strong>In RDBMS: How do we model with documents?</strong></p>
<pre><code>
<span>Book: id, title, ISBN, published, [publish_id]</span>
<span>Publisher: id, name, founded</span>
<span>User: id, email, created</span>
<span>Rating: id, [user_id], [book_id], value</span>
</code></pre>
        <h4>Cấu trúc Mysql and MongoDB</h4>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Mysql</th>
              <th>MongoDB</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>database</td><td>database</td></tr>
            <tr><td>table</td><td>collection</td></tr>
            <tr><td>Row/</td><td>Document</td></tr>
            <tr><td>column</td><td>field</td></tr>
            <tr><td>Table Join</td><td>Embedded Documents</td></tr>
            <tr><td>Primary Key</td><td>Primary Key (mặc định là _id)</td></tr>
          </tbody>
        </table>


        <h2>Các lệnh trong MongoDB</h2>
        <pre><code>
use DB_NAME <span class="comment">// use database</span>
db <span class="comment">// check database is using</span>
<span class="comment">Lưu ý trong mysql dùng dấu `;` để ngăn cách 2 dòng lệnh, nhưng trong mongoDB thì không sử dụng</span>
show dbs <span class="comment">// Show list databases</span>
use freetutsdb db.dropDatabase()  // thực hiện 2 lệnh này để xoá db đang sử dụng
</code></pre>
        
        <h4>Insert Documents</h4>
        <p><strong>db.collection.insertOne()</strong> Insert a document into collection</p>
<pre><code>
db.collection.insertOne(
)
</code></pre>
        <p><strong>db.collection.insertMany()</strong> can insert multiple documents into collection. Pass an array of documents to the method.</p>
        <p>The following example inserts new documents into the inventory collection:</p>
        <pre><code>db.inventory.insertMany([
   // MongoDB adds the _id field with an ObjectId if _id is not present
   { item: "journal", qty: 25, status: "A",
       size: { h: 14, w: 21, uom: "cm" }, tags: [ "blank", "red" ] },
   { item: "notebook", qty: 50, status: "A",
       size: { h: 8.5, w: 11, uom: "in" }, tags: [ "red", "blank" ] },
   { item: "paper", qty: 100, status: "D",
       size: { h: 8.5, w: 11, uom: "in" }, tags: [ "red", "blank", "plain" ] }
]);
</code></pre>

            <h1 id="abc">1.Abc</h1>
            <p>Introduce about scss</p>

            <h1 id="abc">2.Abc</h1>
            <p>Introduce about scss</p>

            <h1 id="abc">3.Abc</h1>
            <p>Introduce about scss</p>

          </div><!-- End post-content -->

        </div><!-- End post-content-wrapper -->
      </div><!-- END col-xl-9 offset-xl-0 col-lg-10 offset-lg-1 -->

      <div class="col-md-3 hidden-lg-down d-flex">
        <div class="post-sidebar flexbox">
          <div class="js-sidebar">
            <div class="sidebar-sticky sidebar-content-wrapper docked top">
              <div class="sidebar-content">
                <div class="post-index">
                  <div class="section-title-line">
                    <h4 class="text-uppercase">Index</h4>
                    <hr class="filler-line">
                  </div><!-- End section-title-line -->
                  <ul id="markdown-toc" class="post-toc nav">
                    <li class="nav-item index-item-level-2">
                      <a href="#vay-thi-svg-la-cai-gi-0" class="post-toc-link nav-link active">Vậy thì... SVG là cái gì?</a>
                    </li>
                    <li class="nav-item index-item-level-3">
                      <a href="#bao-dam-chat-luong-hinh-anh-2" class="post-toc-link nav-link">Bảo đảm chất lượng hình ảnh</a>
                    </li>
                  </ul>
                </div><!-- End post-index -->
              </div><!-- End sidebar-content -->
            </div><!-- End sidebar-sticky sidebar-content-wrapper docked top -->
          </div><!-- End js-sidebar -->
        </div><!-- End post-sidebar flexbox -->
      </div> <!-- End col-md-3 hidden-lg-down -->

      <a id="top-btn" href="javascript:void(0);" class="hidden-sm-down top-btn-is-visible"><i aria-hidden="true" class="fa fa-arrow-up"></i></a>
    </div><!-- End Container -->
  </div><!-- End row -->
</template>