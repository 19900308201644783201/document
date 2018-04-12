<template>
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="text-center">
          SSH with github
        </h1>
        <h3>About SSH</h3>
        <p>Using the SSH protocol, you can connect and authenticate to remote servers and services. With SSH keys, you can connect to GitHub without supplying your username or password at each visit.</p>

        <h3 id="check_existing_ssh">Checking for existing SSH keys</h3>
        <p>Before you generate an SSH key, you can check to see if you have any existing SSH keys.</p>
        <pre><code>ls -al ~/.ssh
#List the files in your .ssh directory, if they exist</code></pre>
        <p>By default, the filenames of the public keys are one of following
          <strong>id_rsa</strong> and <strong>id_rsa.pub</strong>
        </p>
        
        <h3 id="generating_a_new_ssh">Generating a new SSH key and adding it to the ssh-agent</h3>
        
        <p>If you don't already have an SSH key, you must generate a new SSH key.</p>
        <p>1. Paste the text below, substituting in your GitHub email address.</p>
        <pre><code>ssh-keygen -t rsa -b 4096 -C "your_email@example.com"</code></pre>
        <p>2. This creates a new ssh key, using the provided email as a label.</p>
        <pre><code class="green">Generating public/private rsa key pair.</code></pre>
        <p>3. When you're prompted to "Enter a file in which to save the key," press Enter. This accepts the default file location. If you want to save key in id_rsa_ducxinh, enter id_rsa_ducxinh</p>
        <pre><code class="green">Enter file in which to save the key (/Users/xinhnguyend./.ssh/id_rsa): id_rsa_xinh_nguyen</code></pre>
        <pre><code class="green">Your identification has been saved in id_rsa_xinh_nguyen.
Your public key has been saved in id_rsa_xinh_nguyen.pub.</code></pre>
        <p>4. At the prompt, type a secure passphrase. For more information, see </p>
        <pre><code class="green">Enter passphrase (empty for no passphrase):</code></pre>

        <h3>Adding your SSH key to the ssh-agent</h3>
        <p>
          Before adding a new SSH key to the ssh-agent to manage your keys, you should have checked for existing SSH keys and generated a new SSH key.
        </p>
        <p>1. Start the ssh-agent in the background </p>
        <pre><code>$ eval "$(ssh-agent -s)"
<span class="green">Agent pid 59566</span></code></pre>
        <p>Add your SSH private key to the ssh-agent. If you created your key with a different name, or if you are adding an existing key that has a different name, replace id_rsa in the command with the name of your private key file.
        </p>
        <pre><code>$ ssh-add ~/.ssh/id_rsa</code></pre>

        <h3>Adding a new ssh key to your Gihub account</h3>
        <p>1. Copy the ssh key to your clipboard</p>
        <pre><code>$ pbcopy < ~/.ssh/id_rsa_xinh_nguyen.pub</code></pre>
        <p>Or</p>
        <pre><code>$ cat ~/.ssh/id_rsa_xinh_nguyen.pub</code></pre>

        <p>2. Setting -> SSH and GPG keys. -> New SSH key or Add SSH key</p>

        <h3>Testing your SSH connection</h3>
        <pre><code>$ ssh -T git@github.com  ssh-add ~/.ssh/id_rsa</code></pre>


        <p>2. Add the SSH key to your Github account</p>
        <h2>Cài Đặt</h2>
        <h3>Cách 1</h3>

        <h3>Step1</h3>
        <p>Tạo một khoá SSH riêng biệt cho tài khoản GitHub thứ hai của mình</p>
        <pre><code>ssh-keygen -t rsa -C "your-company-email-address"</code></pre>
        <p></p>
      </div><!--  end panel-heading -->
      <div class="panel-body">

      </div> <!-- end panel-body -->
    </div><!-- end panel-default -->
  </div> <!-- end col-md-offset-2 mai -->
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
.green {
  color: #63E463
}
</style>