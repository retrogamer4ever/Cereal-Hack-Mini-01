<!DOCTYPE html>
<html >
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"  />
    <style>
      
      body,html{
        background-color:#999999;
      }
      
      
    </style>
    <title></title>
  </head>
  <body>
    
    <!-- TOP BAR-->
    <div class="navbar navbar-inverse navbar-fixed-top" >
      <div class="navbar-inner" >
        <div class="fluid-container" >
          <ul class="nav" >
            <li><h2><b><font color="#FFFFFF">SOCIAL CURRENCY</font></b></h2></li>
            <li></li>
          </ul>
          
       
          <form class="navbar-search pull-right">
            <a href="account.html"><img src="data/facebook-login-button.png"/></a>
          </form>

            
        </form>
          
        </div>
        
        
      </div>
    </div>
    
    <div class="container">
      
      <!-- BAD IDEA FOR SPACING!!! -->
    <br><br>
      
      <center>
        <img src="data/logo.png" />
      </center>
    
      <center>
         <div class="row">
        
        <div class="span4" >
          
          <h3><b>What is it?</b></h3>
          
           Tired of using all these different payment methods to purchases your favorite goods and services? Why not just turn your social identity into a virtual wallet?
        </div>
        
        <div class="span4" >
         <h3><b>Why use it?</b></h3>
          
          Use your social ide Use your social identity to pay for goods and services!nitty to pay for goods and services, ulimited amount
          of ways to purchases goods, earn cash with out spending a dime! And most importantly never have to sign up for another service!
        </div>
        
        <div class="span4" >
          <h3><b>How does it work?</b></h3>
            Super duper simple, login with your facebook account, add some currency to your social identity, go to your favorite store and purchase item with a push of a button :-D
           
        </div>
            </div>
      </center>
     
        
        
        
     
      
    </div>
    
    
    <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=139468349435437";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
      
      
      FB.Event.subscribe('auth.authResponseChange', function(response) {
  if (response.status === 'connected') {
    window.alert(response.status)
  }
});
      
      
      
      </script>
    
     
      <script src="bootstrap/js/bootstrap.js" />
    
    
     
    
  </body>
</html>
