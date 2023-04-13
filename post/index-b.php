<?php
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload')
{
  if (isset($_FILES['uploadedFile2']) && $_FILES['uploadedFile2']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile2']['tmp_name'];
    $fileName = $_FILES['uploadedFile2']['name'];
    $fileSize = $_FILES['uploadedFile2']['size'];
    $fileType = $_FILES['uploadedFile2']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
 
    // sanitize file-name
    $newFileName2 = md5(time() . $fileName) . '.' . $fileExtension;
 
    // check if file has one of the following extensions
    $allowedfileExtensions = array('jpg', 'gif', 'png');
 
    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = '../empuploads/';
      $dest_path = $uploadFileDir . $newFileName2;
 
      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='File is successfully uploaded.';
      }
      else
      {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    else
    {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile2']['error'];
  }
}

$fname = $_POST['fname'];
$position = $_POST['position'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$skypeid = $_POST['skypeid'];
$img= $newFileName2;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>..|..|..</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />

        <script>
            function copytable(el) {
                var urlField = document.getElementById(el)   
                var range = document.createRange()
                range.selectNode(urlField)
                window.getSelection().addRange(range) 
                document.execCommand('copy')
            }

         </script>
    </head>
    <body id="page-top">
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Clark Outsourcing Signature Template</h1>
                        <hr class="divider" />
                    </div>
                    <div class="container px-4 px-lg-5">

                        <div class="row gx-1 justify-content-center mb-5">
                            <div class="col-lg-7">

                            <table id="copyTemplate" cellspacing="0" cellpadding="0" style="width:700px;max-width:700px; height:180px; font-family: 'Poppins', sans-serif;
                                background-image: url('https://clarkoutsourcing.com/wp-content/uploads/2021/05/email-signiture-template-2021.jpg');background-repeat: no-repeat; background-color: #562c44;">

                                    <tbody><tr style="height:95px; color: #000;">
                                        <th style="vertical-align: top;">
                                            <table style="width: 100%;">
                                                <tbody><tr>
                                                    <th style="width: 30%; height:94px; text-align: center; ">
                                                        <img width="100" class="staff-pic" src="https://clarkoutsourcing.com/email-signature-template/empuploads/<?php echo $img; ?>" alt="Employee Image" style="border: 4px solid #11477c;border-radius:50%; background:white; margin-top: 1.5rem;">
                                                    </th>
                                                    <th style="width: 55%; vertical-align: top;">
                                                        <table style="width: 100%; text-align: left">
                                                            <tbody><tr><th class="staff-name" style="font-family: Arial, Helvetica, sans-serif; font-size: 23px; line-height: 22px; color:#71202d;"><?php echo $fname; ?></th></tr>
                                                            <tr><th class="staff-position" style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color:#71202d;"><?php echo $position; ?></th></tr>
                                                            <tr><th class="staff-phone" style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color:#11477c;padding-top: 8px; line-height: 22px;"><img width="15px" src="https://clarkoutsourcing.com/wp-content/uploads/2020/01/phone.png"> <?php echo $phone; ?></th></tr>
                                                            <tr><th class="staff-email" style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color:#11477c; line-height: 22px;"><img width="15px" src="https://clarkoutsourcing.com/wp-content/uploads/2020/01/envelope.png"> <?php echo $email; ?></th></tr>
                                                            <tr><th class="staff-skype" style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color:#11477c; line-height: 22px;"><img width="15px" src="https://clarkoutsourcing.com/wp-content/uploads/2020/01/skype.png"> <?php echo $skypeid; ?></th></tr>
                                                        </tbody></table>
                                                    </th>
                                                    <th style="width: 16%;; text-align: center; vertical-align: top;">
                                                        <img width="100" src="https://clarkoutsourcing.com/wp-content/uploads/2021/04/new_logo.png">
                                                    </th>
                                                </tr>
                                            </tbody></table>

                                        </th>
                                    </tr>
                                    <tr style="height:2px;">
                                        <th style="font-size: 0.6em; color: #fff; padding: 0 !important;">
                                            <table style="width: 100%; margin: auto;">
                                                <tbody><tr style=" font-family: 'Poppins', sans-serif;">
                                                    <th style="width: 30%; text-align: center;"><a style="color: #fff; text-decoration:none;" href="https://clarkoutsourcing.com/" target="_blank" rel="noopener">www.clarkoutsourcing.com</a></th>
                                                    <th style="width: 70%; text-align: right; padding-right: 20px;">US: +1 910 795 2888 | UK: +44 20 8133 1069 | AUS: +61 2 8003 5771</th>
                                                </tr>
                                            </tbody></table>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <br><br>
                                <div class="d-grid" style="width:710px; margin-top:1rem; margin-left:1rem;">                                    
                                <input type=button class="btn btn-primary" value="Copy to Clipboard" onClick="copytable('copyTemplate')"> &nbsp;<button type="button" class="btn btn-primary" onclick="history.back()">Return</buttons>
                                </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
