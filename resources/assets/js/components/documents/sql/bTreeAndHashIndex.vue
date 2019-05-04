<template>
  <div class="col-md-10 col-md-offset-2 main">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="text-center">B-tree index and Hash index</h1>
      </div>
      <div class="panel-body">
        <h2>Introduce</h2>
        <p>MySQL cung cấp 3 kiểu index khác nhau cho data đó là B-Tree, Hash và R-Tree index. Hiểu rõ về các kiểu index này sẽ giúp chúng ta tạo ra các loại index trong bảng một cách hiệu quả hơn. Do R-Tree được sử dụng cho các loại dữ liệu không gian spacial data và thường ít khi gặp phải nên bài viết này chúng ta sẽ tập chung so sánh 2 loại index là B-Tree và Hash</p>
        
        <h3>B-Tree Index</h3>
        <ul>B-Tree index có các đặc điểm sau:
          <li>* Dữ liệu index trong B-Treeđược tổ chức và lưu trữ theo dạng tree, tức là có root, branch, leaf. Giá trị của các node được tổ chức tăng dần từ trái qua phải.
            B-Tree index được sử dụng trong các biểu thức so sánh dạng: =, >, >=, <, <=, BETWEEN và LIKE
          </li>
          <li>* Khi truy vấn dữ liệu thì việc tìm kiếm trong B-Tree là 1 quá trình đệ quy, bắt đầu từ root node và tìm kiếm tới branch và leaf, đến khi tìm được tất cả dữ liệu - thỏa mãn với điều kiện truy vấn thì mới dùng lại.</li>
          <li>B-Tree index được sử dụng cho những column trong bảng khi muốn tìm kiếm 1 giá trị nằm trong khoảng nào đó. Ví dụ: tìm kiếm những sinh viên có điểm Toán từ 5-9</li>
        </ul>

        <h3>Hash Index</h3>
        <ul>Hash index có các đặc điểm sau:
          <li>* Hash index có một vài đặc điểm khác biệt so với Btree index.</li>
          <li>* Dữ liệu index được tổ chức theo dạng Key - Value được liên kết với nhau.</li>
          <li>* Khác với B-Tree, thì Hash index chỉ nên sử dụng trong các biểu thức toán tử là = và <>. Không sử dụng cho toán từ tìm kiếm 1 khoảng giá trị như > hay < .</li>
          <li>* Không thể tối ưu hóa toán tử ORDER BY bằng việc sử dụng Hash index bởi vì nó không thể tìm kiếm được phần từ tiếp theo trong Order.</li>
          <li>* Toàn bộ nội dung của Key được sử dụng để tìm kiếm giá trị records, khác với B-Tree một phần của node cũng có thể được sử dụng để tìm kiếm.</li>
          <li>* Hash có tốc độ nhanh hơn kiểu Btree.</li>
        </ul>

        <p>Việc chọn index theo kiểu B-Tree hay Hash ngoài yếu tố về mục đích sử dụng index thì nó còn phụ thuộc vào việc Storage Engine có hỗ trợ loại index đó hay không. Ví dụ MyISAM, InnoDB hay Archive chỉ hỗ trợ B-Tree, trong khi MyISAM lại hỗ trợ cho cả 2.</p>
      </div>
    </div>
  </div>
</template>