<?php require_once('config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>
    <head>
       <link rel="stylesheet" href="css/login.css">
    </head>


  <body class="hold-transition login-page ">
    <script>
      start_loader()
    </script>
    <link rel="stylesheet" href="css/login.css">
    
    <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login #2</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .btn-outline-danger {
          color: #0000ff; /* Text color - Blue */
          border-color: #0000ff; /* Border color - Blue */
        }
        .btn-outline-danger:hover {
          color: #ff0000; /* Hover text color - Red */
          border-color: #00ff00; /* Hover border color - Red */
        }

        #create_account{
            margin-left: 10px;
        }

        .gradient-custom-2 {
        /* fallback for old browsers */
        background: #007bff;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        /* background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        } */
        background: radial-gradient(circle at 10% 20%, rgb(0, 102, 161) 0%, rgb(0, 68, 108) 90.1%);

        @media (min-width: 768px) {
          .gradient-form {
          height: 100vh !important;
          }
        }
        @media (min-width: 769px) {
          .gradient-custom-2 {
          border-top-right-radius: .3rem;
          border-bottom-right-radius: .3rem;
          }
        }

        

    </style>
  </head>
  <body>
  
    
  <section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  
                  <h2 class="mt-1 mb-5 pb-1" style="font-size: 35px;"><i class="fas fa-leaf" style="color: green;"></i><br>Leaf Diseases Detection System With Artificial Intelligence</h2>
                </div>

                <form id="login-frm" action="" method="post">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                    <input type="text" name="username"  class="form-control"
                      placeholder="Username or email address" />
                    <label class="form-label" >Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" class="form-control" name="password" placeholder="Enter Secure Password"/>
                    <label class="form-label"  >Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">

                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                      in</button>

                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <a class="btn btn-outline-primary" href="javascript:void(0)" id="create_account">Create new</a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Leaf Diseases Detection System With Artificial Intelligence is a blah blah blah blah</h4>
                <p class="small mb-0">basta dri mga subintro sa atoa kamo na bahala<br><br>

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ratione rerum tempore pariatur provident voluptatem deleniti sed, inventore ipsa hic corrupti ullam tenetur, harum veritatis? Hic neque perferendis doloribus similique.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <!-- <script src="dist/js/adminlte.min.js"></script> -->

  <script>
    window.uni_modal = function($title = '' , $url='',$size=""){
          start_loader()
          $.ajax({
              url:$url,
              error:err=>{
                  console.log()
                  alert("An error occured")
              },
              success:function(resp){
                  if(resp){
                      $('#uni_modal .modal-title').html($title)
                      $('#uni_modal .modal-body').html(resp)
                      if($size != ''){
                          $('#uni_modal .modal-dialog').addClass($size+'  modal-dialog-centered')
                      }else{
                          $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
                      }
                      $('#uni_modal').modal({
                        show:true,
                        backdrop:'static',
                        keyboard:false,
                        focus:true
                      })
                      end_loader()
                  }
              }
          })
      }
    $(document).ready(function(){
      end_loader();
      $('#create_account').click(function(){
        uni_modal("Create Account","create_account.php")
      })
    })
  </script>
  <div class="modal fade" id="uni_modal" role='dialog'>
      <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title"></h5>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>