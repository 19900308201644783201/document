<template>
  <div class="row">
    <div class="container">

      <div class="col-xl-9 offset-xl-0 col-lg-10 offset-lg-1">
        <div class="post-content-wrapper">
          <div class="post-meta">
            <h1 class="is-markdown-title">Làm việc với nhiều tài khoản github trên cùng một máy tính</h1>
          </div><!-- End post-meta -->

          <div class="md-contents post-content">
            <h1 id="abc">1.Mở đầu</h1>
            <p>Bạn có một tài khoản Github cá nhân thì mọi thứ có vẻ hoàn hảo. Nhưng khi đi làm công ty, hoặc làm việc cho tổ chức riêng nào đó và giờ thì cần có quyền để gửi và nhận từ nhiều tài khoản. Tôi sẽ chỉ cho bạn mẹo để giải quyết vấn đề này.</p>

            <h1 id="abc">2.Step1: Create a New SSH Key</h1>
            <p>Tạo một khoá SSH riêng biệt cho tài khoản GitHub thứ hai của mình</p>

<pre><code><span>$ cd ~/.ssh</span>
<span>$ ssh-keygen -t rsa -C "your-company-email-address"</span>
</code></pre>

        <p>Nhập tên file sẽ lưu key</p>

<pre><code class="green"><span>Enter file in which to save the key (/Users/xinhnguyend./.ssh/id_rsa): id_rsa_xinh_nguyen</span>
<span>#chú ý là đang ở /Users/xinhnguyend./.ssh</span>
</code></pre>

        <p>Chú ý không nên ghi đè lên khoá đã được khai báo cho tài khoản cá nhân của bạn. Nên lưu tệp với tên <strong>id_rsa_{your_company_account}</strong>. Ở đây tôi sẽ lưu lại thành <strong>~/.ssh/id_rsa_xinh_nguyen</strong>.</p>

        <h3>Step2: Attach the New Key</h3>
        <p>Add SSH key vào Github account</p>
        <pre><code>$ pbcopy < ~/.ssh/id_rsa_xinh_nguyen.pub</code></pre>
        <p>Chỉ SSH về ssh key vừa tạo.</p>
        <pre><code>$ ssh-add ~/.ssh/id_rsa_xinh_nguyen</code></pre>
        <p>Check account đang được add vào ssh</p>
        <pre><code>$ ssh -T git@github.com</code></pre>

        <h3>Step3: Create a Config File</h3>
        <p>Chúng ta đã hoàn thành được phần lớn việc phải làm; nhưng bây giờ chúng ta cần một cách để chỉ định khi nào chúng ta muốn đẩy vào tài khoản cá nhân, và khi nào chúng ta nên đẩy vào tài khoản của công ty. Để làm việc này, hãy tạo ra một tệp config</p>
        <pre><code>$ vim ~/.ssh/config</code></pre>
        <p>Add config vào file</p>
        <pre><code># Default GitHub
Host github.com
HostName github.com
User git
IdentityFile  ./ssh/id_rsa</code></pre>
        <p>Những dòng trên là cài đặt mặt định cho việc đẩy lên tài khoản cá nhân của bạn</p>
        <pre><code>Host github-at-xinh-nguyen // chú ý -at-xinh-nguyen 
HostName github.com
User git
IdentityFile ~/.ssh/id_rsa_xinh_nguyen  // chú ý id_rsa_xinh_nguyen
        </code></pre>

        <h3>Step 4: Try it out</h3>
        <pre><code>$ git clone git@github.com:<span class="green">at-xinhnguyen/test_multiple_ssh.git</span>
$ git config user.name your_user_name
$ git config user.email your_email
</code></pre>
        <p>Chú ý sửa lại remote origin : <span class="red">github-at-xinh-nguyen</span> = host trong file config at-xinhnguyen:
        </p>
        <pre><code>$ git remote remove origin
$ git remote add origin git@<span class="red">github-at-xinh-nguyen</span><span class="green">:at-xinhnguyen/test_multiple_ssh.git</span>
$ git remote -v</code></pre>

        <p>Tạo file commit và push lên thử nhé</p>
        <pre><code>$ echo "Hello, I'm xinh" > test.txt
$ git add test.txt
$ git commit -m 'test'
$ git push origin master
</code></pre>

        <h2>Kết thúc</h2>
        <p>Như bài biết đã đề cập, khi có nhu cầu làm việc với 2 hay nhiều ài khoản github (thậm chí có thể cả bitbucket hay bất kỳ một dịch vụ git nào khác) trên cùng một máy tính, tôi đã không biết xử lý như thế nào. Lúc đó, tôi chỉ có thể dụng ssh cho một tài khoản cá nhân của mình và dùng https cho những cái còn lại. Điều này gây bất tiện vô cùng lớn khi tôi làm việc với git. Và khi gặp bài viết này, nó như một liều thuốc quý chữa tận gốc vấn đề mà tôi gặp phải. Tôi thấy rất vui vì điều này. Chúc các bạn học tập và làm việc hiệu quá với git.</p>

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