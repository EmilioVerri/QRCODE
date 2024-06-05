<html>

<head>
  <!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/style.css/">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
    -->



  <!--
    <title>Qr Generation Form</title>  


    <link rel="stylesheet" type="text/css" href="css/uikit-rtl.css/">
    <link rel="stylesheet" type="text/css" href="css/uikit-rtl.min.css/">
    <link rel="stylesheet" type="text/css" href="css/uikit.css/">
    <link rel="stylesheet" type="text/css" href="css/uikit.min.css/">
    <script src="js/uikit-icons.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <script src="js/uikit.js"></script>
    <script src="js/uikit.min.js"></script>
</head>
<body>  
  <div class="container">          
   <div class="table-responsive">  
    <h3 align="center">QR Generation Form</h3><br/>
    <div class="box">
     <form method="post" action="qrcode.php" > 
      <div class="form-group">
         <label>QR Text</label>
         <input type="text" name="qrtext" id="qrtext" placeholder="Enter QR Text" required data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control" />
      </div>
      <div class="form-group">
       <input type="submit" name="sbt-btn" value="QR Generate" class="btn btn-success" />
      </div>
     </form>
    </div>
   </div>  
  </div>
 </body>  
</html>  -->




  <html>

  <head>
    <title>Qr Generation Form</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
  </head>

<body class="uk-background-muted uk-padding uk-panel">
  <nav class="uk-navbar-container">
    <div class="uk-container">
      <div uk-navbar>

        <div class="uk-navbar-left">

          <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Home</a></li>
            <li class="uk-active">
              <a href="amministratore.php">Amministratore</a>
              <div class="uk-navbar-dropdown">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                  <li><a href="amministratore.php">Home Amministratore</a></li>
                  <li><a href="qrpresenti.php">QR PRESENTI</a></li>
                </ul>
              </div>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </nav>
  <div class="uk-container uk-background-muted uk-padding uk-panel">

    <article class="uk-comment uk-comment-primary" role="comment">
      <header class="uk-comment-header">
        <div class="uk-grid-medium uk-flex-middle" uk-grid>
          <div class="uk-width-auto">
            <img class="uk-comment-avatar" src="images/avatar.jpg" width="80" height="80" alt="">
          </div>
          <div class="uk-width-expand">
            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Author</a></h4>
            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
              <li><a href="#">12 days ago</a></li>
              <li><a href="#">Reply</a></li>
            </ul>
          </div>
        </div>
      </header>
      <div class="uk-comment-body">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
          dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
          clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
      </div>
    </article>







    <article class="uk-comment uk-comment-primary" role="comment">
      <header class="uk-comment-header">
        <div class="uk-grid-medium uk-flex-middle" uk-grid>
          <div class="uk-width-auto">
            <img class="uk-comment-avatar" src="images/avatar.jpg" width="80" height="80" alt="">
          </div>
          <div class="uk-width-expand">
            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Author</a></h4>
            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
              <li><a href="#">12 days ago</a></li>
              <li><a href="#">Reply</a></li>
            </ul>
          </div>
        </div>
      </header>
      <div class="uk-comment-body">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
          dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
          clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
      </div>
    </article>
    <article class="uk-comment uk-comment-primary" role="comment">
      <header class="uk-comment-header">
        <div class="uk-grid-medium uk-flex-middle" uk-grid>
          <div class="uk-width-auto">
            <img class="uk-comment-avatar" src="images/avatar.jpg" width="80" height="80" alt="">
          </div>
          <div class="uk-width-expand">
            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Author</a></h4>
            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
              <li><a href="#">12 days ago</a></li>
              <li><a href="#">Reply</a></li>
            </ul>
          </div>
        </div>
      </header>
      <div class="uk-comment-body">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
          dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
          clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
      </div>
    </article>
    <article class="uk-comment uk-comment-primary" role="comment">
      <header class="uk-comment-header">
        <div class="uk-grid-medium uk-flex-middle" uk-grid>
          <div class="uk-width-auto">
            <img class="uk-comment-avatar" src="images/avatar.jpg" width="80" height="80" alt="">
          </div>
          <div class="uk-width-expand">
            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Author</a></h4>
            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
              <li><a href="#">12 days ago</a></li>
              <li><a href="#">Reply</a></li>
            </ul>
          </div>
        </div>
      </header>
      <div class="uk-comment-body">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
          dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
          clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
      </div>
    </article>
    <article class="uk-comment uk-comment-primary" role="comment">
      <header class="uk-comment-header">
        <div class="uk-grid-medium uk-flex-middle" uk-grid>
          <div class="uk-width-auto">
            <img class="uk-comment-avatar" src="images/avatar.jpg" width="80" height="80" alt="">
          </div>
          <div class="uk-width-expand">
            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Author</a></h4>
            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
              <li><a href="#">12 days ago</a></li>
              <li><a href="#">Reply</a></li>
            </ul>
          </div>
        </div>
      </header>
      <div class="uk-comment-body">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
          dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
          clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
      </div>
    </article>
    <article class="uk-comment uk-comment-primary" role="comment">
      <header class="uk-comment-header">
        <div class="uk-grid-medium uk-flex-middle" uk-grid>
          <div class="uk-width-auto">
            <img class="uk-comment-avatar" src="images/avatar.jpg" width="80" height="80" alt="">
          </div>
          <div class="uk-width-expand">
            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Author</a></h4>
            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
              <li><a href="#">12 days ago</a></li>
              <li><a href="#">Reply</a></li>
            </ul>
          </div>
        </div>
      </header>
      <div class="uk-comment-body">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
          dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
          clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
      </div>
    </article>
    <article class="uk-comment uk-comment-primary" role="comment">
      <header class="uk-comment-header">
        <div class="uk-grid-medium uk-flex-middle" uk-grid>
          <div class="uk-width-auto">
            <img class="uk-comment-avatar" src="images/avatar.jpg" width="80" height="80" alt="">
          </div>
          <div class="uk-width-expand">
            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Author</a></h4>
            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
              <li><a href="#">12 days ago</a></li>
              <li><a href="#">Reply</a></li>
            </ul>
          </div>
        </div>
      </header>
      <div class="uk-comment-body">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
          dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
          clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
      </div>
    </article>






  </div>




  <nav class="uk-navbar-container">
    <div class="uk-container">
      <div uk-navbar>

        <div class="uk-navbar-left">

          <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
          </ul>

        </div>
      </div>
    </div>
  </nav>
</body>

</html>