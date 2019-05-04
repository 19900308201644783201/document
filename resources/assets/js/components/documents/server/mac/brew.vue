<template>
  <div class="col-md-10 col-md-offset-2 main">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="text-center">Brew in Mac</h1>
      </div>
      <div class="panel-body">
        <h1>Install</h1>
<pre><code>/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"</code></pre>
      <ul>
        <li>brew home: Open home page Homebrew</li>
        <li>brew doctor: check brew</li>
        <li>brew list: Hiển thị các brew đã cài đặt</li>
        <li>brew search ASD: Hiển thị các brew hiện có trong brew giống ASD</li>
        <li>brew info ASD: Hiển thị thông tin chi tiết của brew ASD</li>
        <li>brew install ASD: cài đặt brew ASD</li>
        <li>brew uninstall ASD: huỷ cài đặt brew ASD</li>
        <li>brew reinstall ASD: cài đặt lại brew ASD</li>
        <li>brew update: cập nhập lại công thức brew</li>
        <li>brew upgrade: Tải bản mới nhất của brew về</li>
        <li>brew outdated: Hiển thị những brew đã bị lỗi thời</li>
      </ul>

<pre><code>brew search nginx
brew info nginx
brew install nginx</code></pre>

      </div>
    </div>
  </div>
</template>