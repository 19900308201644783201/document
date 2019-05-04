<template>
  <div class="row">
    <div class="container">

      <div class="col-xl-9 offset-xl-0 col-lg-10 offset-lg-1">
        <div class="post-content-wrapper">
          <div class="post-meta">
            <h1 class="is-markdown-title">REVIEW SÁCH: CLEAN CODE: A HANDBOOK OF AGILE SOFTWARE CRAFTSMANSHIP</h1>
          </div><!-- End post-meta -->

          <div class="md-contents post-content">
            <h1 id="abc">1.Bài học rút ra</h1>
            <ul>
                <li>Tầm quan trọng của việc viết “code sạch”.</li>
                <li>Cách đặt tên biến, tên hàm. Tên biến, tên hàm phải nói rõ tác dụng của hàm và biến. (Vâng, những thằng mình muốn chọi gạch là những thằng đặt tên biến int a, b, c hoặc đặt tên hàm tối nghĩa).</li>
                <li>Độ dài của hàm, các parameter truyền vào. (1 hàm đừng nên dài quá 1 trang A4, cũng đừng nên có quá nhiều parameter. Thử đọc 1 hàm dài khoảng 800 dòng code các bạn sẽ biết cực chừng nào).</li>
                <li>Tại sao không nên lạm dụng comment. Comment không phải xấu, nhưng nhiều người viết code không sạch, sau đó dùng comment để nói đoạn code đó làm gì. Sách khuyên ta nên viết code tự comment, tức là đoạn code đã trong sáng tới mức đọc là biết code làm gì, comment chỉ nên dùng để bổ sung những điều không giải thích được qua code (VD: đoạn code này để fix bug abc, dùng thuật toán này vì lý do bcd).</li>
                <li>Hướng dẫn cách viết và dùng unit test.<a href="https://toidicodedao.com/2015/08/25/tutorial-viet-unit-test-trong-c-voi-nunit/">UnitTest</a></li>
                <li>Giải quyết 1 số vấn đề liên quan tới concurrency.</li>
                <li>Một số ví dụ cụ thể về việc refactor code (Phần này khá hay, biến code rởm thành code sạch thông qua các biện pháp refactor).</li>
                <li>Một số dấu hiệu nhận biết code smell (Phần này cũng khá hay, bạn có thể đọc và dựa theo các dấu hiệu nay để tìm những đoạn “code rởm” trong project hiện tại =))).</li>
            </ul>

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