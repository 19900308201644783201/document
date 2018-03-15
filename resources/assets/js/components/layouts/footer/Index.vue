<template>
    <div>
        <div class="search-text"> 
           <div class="container">
             <div class="row text-center">
             
               <div class="form">
                   <h4>SIGN UP TO OUR NEWSLETTER</h4>
                    <form id="search-form" class="form-search form-horizontal">
                        <input type="text" class="input-search" placeholder="Email Address">
                        <button type="submit" class="btn-search">SUBMIT</button>
                    </form>
                </div>
            
              </div>         
           </div>     
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <span class="logo">LOGO</span>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="menu">
                            <span>Menu</span>    
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Gallery </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="adress">
                            <span>Contact</span>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i> <a href="#">Phone</a>
                            </li>
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Adress</a>
                            </li> 
                            <li>
                                <i class="fa fa-envelope" aria-hidden="true"></i> <a href="#">Email</a>
                            </li> 
                        </ul>
                    </div>
                </div> 
            </div>
        </footer>
    </div>
</template>
<style type="text/css">
    body{
    font-family:Roboto;
}
.search-text{
    margin-top:50px;
    background-color: #272d33;
    padding-top:60px;
    padding-bottom:60px;
}
    
.search-text .input-search{
    height:45px;
    width:40%;
    padding-left:20px;
    color:#333;
} 

.search-text .btn-search{
    background: #da3e44;
    font-family:Roboto;
    border:none;
    color:#FFF;
    height: 45px;
    width: 80px;
}

.search-text h4{
    color: #FFF;
    font-weight: 700;
}

footer{
     background-color: #33383c;
     padding:30px 0px;
}          

.logo{
    color:#FFF;
    font-weight:800;
    font-size:30px;
}

.adress span , .menu span{
   color: #FFF; 
   font-weight: 800; 
   border-bottom: 1px solid #c7c7c7; 
   padding-bottom: 10px; 
   margin-bottom: 20px;
   display: block;
   text-transform: uppercase;
   font-size: 16px;
   letter-spacing: 3px;
}
 
.adress li a , .menu li a{
    color:#FFF;
    letter-spacing: 3px;
    text-decoration:none;
    font-size:12px;
}

.adress li, .menu li{
    margin-top: 5px;
    list-style: none;
}

.adress li a:hover , .menu li a:hover{
    color: #da3e44;
    -webkit-transition: all 1s ease-in-out;
    -moz-transition: all 1s ease-in-out;
    -o-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
}

.adress .fa{
    color: #da3e44;
    margin-right: 10px;
    font-size:14px;
}
</style>