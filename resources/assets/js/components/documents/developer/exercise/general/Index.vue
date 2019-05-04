<template>
  <div class="row">
    <div class="container">

      <div class="col-xl-9 offset-xl-0 col-lg-10 offset-lg-1">
        <div class="post-content-wrapper">
          <div class="post-meta">
            <h1 class="is-markdown-title">Exercise</h1>
          </div><!-- End post-meta -->
          <div class="md-contents post-content">
<!-- ################ BEGIN H3 ############################-->
            <h3>1.List ra 1 dãy 100 số fibonaci</h3>
            <p>1.1 Định nghĩa: Dãy Fibonacci là dãy vô hạn các số tự nhiên bắt đầu bằng hai phần tử 0 và 1 hoặc 1 và 1, các phần tử sau đó được thiết lập theo quy tắc mỗi phần tử luôn bằng tổng hai phần tử trước nó.: 0,1,1,2,3,5,8,13,21</p>
<pre><code>
<span class="hljs-keyword">public function</span> <span class="hljs-title">printFibonacci</span>($n)
{
    <span class="hljs-comment">// Dãy số Fibonaci được định nghĩa như sau: F0 = 0, F1 = 1, F2 = F0+F1. 
    Nhập n với 2<=n<=90.
    Viết chương trình in ra n số Fibonacci đầu tiên.</span>
    
    <span>$f0 = 0; $f1 = 1;</span>
    <span class="hljs-keyword">echo</span><span> "First $n fibonacci number are: $f0 $f1 ";</span>
    <span class="hljs-keyword">for </span>($i = 2; $i < $n; $i++) {
        <span>$f2 = $f0 + $f1;</span>
        <span>$f0 = $f1;</span>
        <span>$f1 = $f2;</span>
        <span>echo "$f2 ";</span>
    }
    <span class="hljs-keyword">return</span> $this->printArray($f);
}
</code></pre>
<!-- ################ END H3 ############################-->
            <h3>1.1  Nhập n và trả về số Fibonacci thứ n</h3>
<pre><code>
<span class="hljs-keyword">public function</span> <span class="hljs-title">getFibonacciByNumber</span>($n)
{
  <span class="hljs-keyword">if</span> <span>($n == 0 || $n == 1)</span> <span class="hljs-keyword">return</span> $n;
  <span class="hljs-keyword">return</span> $this->getFibonacciByNumber($n - 1) + $this->getFibonacciByNumber($n - 2)
}
</code></pre>
<!-- ################ END H3 ############################-->
            <h3>2. Dùng for, while, đệ quy tính tổng list phần tử( dùng cả 3 cách)</h3>
<pre><code>
<span class="hljs-comment">// Dùng for</span>
<span class="hljs-keyword">public function </span>tinhTongPhanTuMang(<span class="hljs-keyword">array</span> $array)
{
  <span>$count = count($array);</span>
  <span>$sum = 0;</span>
  <span class="hljs-keyword">for </span>($i = 0; $i < $count; $i++) {
    <span>$sum += $array[$i];</span>
}
}

<span class="hljs-comment">// Dùng while </span>
<span class="hljs-keyword">public function </span>tinhTongPhanTuMang(<span class="hljs-keyword">array</span> $array)
{
  <span>$sum = 0;</span>
  <span>$count = count($array);</span>
  <span>$i = 0;</span>
  <span class="hljs-keyword">while</span> <span>($i < $count) {</span>
      <span>$sum += $array[$i];</span>
      <span>$i++;</span>
  }
}

<span class="hljs-comment">// Dùng Đệ quy </span>
<span class="hljs-keyword">public function </span>tinhTongPhanTuMang(<span class="hljs-keyword">array</span> $array, <span class="hljs-keyword">int </span> $length)
{
  <span class="hljs-keyword">if </span>(--$length < 0) <span class="hljs-keyword">return </span> 0
  <span class="hljs-keyword">return</span> $array[$length] + $this->tinhTongPhanTuMang($array, $length);
}
</code></pre>
<!-- ################ END H3 ############################-->
            <h3>3. Cho list phần tử [9, 50, 2, 6], mình sắp xếp sao cho thành số lớn nhất: ví duj: 95062</h3>
<!-- ################ END H3 ############################-->
            <h3>4. [a, b, c], [1, 2,3] . merge 2 mảng sau cho được kết quả: [a, 1, b, 2, c, 3]</h3>
<!-- ################ END H3 ############################-->
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