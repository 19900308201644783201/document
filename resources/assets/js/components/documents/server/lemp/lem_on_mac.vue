<template>
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="text-center">How To Install Linux, Nginx, MySQL, PHP with FPM on Mac OS X</h3>
      </div> <!-- end panel-heading -->
      <div class="panel-body">
        <h3>Installation</h3>
        <p>
          We are going to use Homebrew for all our installations. It makes life easy and it is pretty straightforward. Click here to read about it or just install right away.
        </p>
        <div class="highlight">
          <pre class="highlight shell"><code>/usr/bin/ruby <span class="nt">-e</span> <span class="s2">"</span><span class="k">$(</span>curl <span class="nt">-fsSL</span> https://raw.githubusercontent.com/Homebrew/install/master/install<span class="k">)</span><span class="s2">"</span>
</code></pre></div>
        <p>
          When you are done, ensure homebrew's environment is setup correctly.
        </p>
        <pre><code>brew doctor</code></pre>
        <p>
          Next we're going to install a launchctl wrapper that will stop, start, and restart any service we install with brew.
        </p>
        <pre><code>brew tap homebrew/services
brew tap homebrew/dupes</code></pre>
        <p></p>


        <h1>Install Nginx</h1>
        
<pre><code>brew install nginx</code></pre>
<h3>Bặt tắt nginx</h3>
<pre><code>sudo nginx #turn on nginx
sudo nginx -s stop # turn off nginx</code></pre>
<p></p>

        <h1>Install PHP with FPM</h1>
        <pre><code>brew tap josegonzalez/php
brew tap homebrew/dupes #Nếu không tap homebrew/dupes sẽ có lỗi: No available formula for zlib
brew install --with-fpm --without-apache php71  #cài PHP7.1, bật FPM, tắt Apache.</code></pre>
      </div> <!-- end panel-body -->
    </div> <!-- End panel panel-default -->
  </div>  <!-- End col-md-offset-2 main -->
</template>
<style>
  .highlight {
    color: #e94849
  }
</style>
