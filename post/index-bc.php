<?php
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload')
{
  if (isset($_POST['croppedImage']) && !empty($_POST['croppedImage']))
  {
    // Get the Data URL of the cropped image
    $dataURL = $_POST['croppedImage'];
    // Extract the Base64 encoded image data
    $base64Image = explode(',', $dataURL)[1];
    // Decode the Base64 image data
    $imageData = base64_decode($base64Image);
    // Generate a unique file name
    $newFileName = md5(time()) . '.png';
    // Directory in which the uploaded file will be moved
    $uploadFileDir = '../images/';
    $dest_path = $uploadFileDir . $newFileName;
    // Save the image data to the specified file
    if (file_put_contents($dest_path, $imageData))
    {
      $message = 'File is successfully uploaded.';
    }
    else
    {
      $message = 'There was some error moving the file to the upload directory. Please make sure the upload directory is writable by the web server.';
    }
  }
  else
  {
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['croppedImage']['error'];
  }
}

$fname = $_POST['fname'];
$position = $_POST['position'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$skypeid = $_POST['skypeid'];
$img= $newFileName;



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Email Signature Template</title>
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
        <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

        <script>
            function copytable(el) {
                var urlField = document.getElementById(el)   
                var range = document.createRange()
                range.selectNode(urlField)
                window.getSelection().addRange(range) 
                document.execCommand('copy')
            }

            function download() {

				  // Specify the desired width and height of the image
				  const width = 800;
				  const height = 240;
				  // Specify the desired DPI (dots per inch)
				  const dpi = 300;
				  // Get the table element and store its original dimensions
				  const table = document.querySelector(".email-signature-section");
				  const originalWidth = table.offsetWidth;
				  const originalHeight = table.offsetHeight;
				  // Set the desired width and height for the table
				  table.style.width = `${width}px`;
				  table.style.height = `${height}px`;
				  html2canvas(table, {}).then(function(canvas) {
				    // Convert the canvas to a PNG image
				    var img = canvas.toDataURL('image/png');
				    // Create a download link for the PNG image
				    var link = document.createElement("a");
				    link.download = "email-signature.png";
				    link.href = img;
				    link.click();
				    // Restore the table's original dimensions
				    table.style.width = `${originalWidth}px`;
				    table.style.height = `${originalHeight}px`;
				  });
				
	            }

         </script>
         <style type="text/css">
         	.email-signature-section {
         		position: relative;
         		overflow: hidden;
         		width: fit-content;
                margin: auto;
                }
         </style>
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
                            <div class="col-lg-12 text-center">
                            <div id="email-signature-section" class="email-signature-section" style="position: relative; overflow: hidden; width: fit-content;margin: auto;">
                            <div class="overflow-red" style="background-position: center; background-image: url(https://clarkoutsourcing.com/wp-content/uploads/2021/05/red-v2.png);   background-repeat: no-repeat;  background-size: contain;  width: 227px; height: 150px;  position: absolute;top: -16px;  right: -6px;"></div>
                            <div class="overflow-blue" style="background-position: center;background-image: url(https://clarkoutsourcing.com/wp-content/uploads/2021/05/blue.png); background-repeat: no-repeat; background-size: contain; width: 21%; height: 43%;  position: absolute; bottom: -3px;left: -2px;"></div>
                            <div class="overlay-image" style="background-image: url(https://clarkoutsourcing.com/wp-content/uploads/2021/05/white.png); background-repeat: no-repeat; background-position: bottom right; background-size: contain; position: absolute; top: 0;  bottom: 0; left: 0; right: 0; width: 100%; height: 100%; z-index: 2;"></div>
                            <table id="copyTemplate" cellspacing="0" cellpadding="0" style="width:800px;max-width:800px; height:240px; font-family: 'Poppins', sans-serif;
                                background-image: url('https://clarkoutsourcing.com/wp-content/uploads/2021/05/email-background-v2.png');background-repeat: no-repeat; background-color: #fff; background-size: cover; background-position: bottom; margin:auto; background-size: cover;">

                                    <tbody><tr style="height:95px; color: #000;">
                                        <th style="vertical-align: top;">
                                            <table style="width: 100%;">
                                                <tbody><tr>
                                                	<th style="width: 15%; text-align: center; vertical-align: top; padding-top: 7px; padding-left: 5px;">
                                                        <img width="150" src="https://clarkoutsourcing.com/wp-content/uploads/2021/05/co-logo-v2.png">
                                                    </th>
                                                    <th style="width: 20%; height:94px; text-align: center; padding: 20px; background-image: url(https://clarkoutsourcing.com/wp-content/uploads/2021/05/center-logo.png); background-position: 0% 65%;background-repeat: no-repeat;     background-size: 95% 70%; ">
                                                       <!--  <img width="120" height="120" class="staff-pic" src="https://clarkoutsourcing.com/email-signature-template/empuploads/<?php echo $img; ?>" alt="Employee Image" style="border: 4px solid #88151a;border-radius:50%; background:white; margin-top: 35px; object-fit: cover; object-position: center;"> -->
                                                       <div style="border: 4px solid #88151a;border-radius:50%; background:white; margin-top: 10px; background-image: url(https://clarkoutsourcing.com/email-signature-template/images/<?php echo $img; ?>); background-repeat: no-repeat; background-size: cover; background-position: center; width: 150px; height: 150px;"></div>
                                                    </th>
                                                    <th style="width: 60%; vertical-align: top; padding-left: 20px;">
                                                        <table style="width: 100%; text-align: left">
                                                            <tbody><tr><th class="staff-name" style="font-family: 'Poppins', sans-serif; font-size: 22px; line-height: 22px; color:#71202d; padding-top: 12%; "><?php echo $fname; ?></th></tr>
                                                            <tr><th class="staff-position" style="font-family: 'Poppins', sans-serif; font-size: 15px; color:#71202d; font-weight: 400;"><?php echo $position; ?></th></tr>
                                                            <tr><th class="staff-phone" style="font-family: 'Poppins', sans-serif; font-size: 14px; color:#11477c;padding-top: 8px; line-height: 22px; font-weight: 400;"><img width="18px" src="https://clarkoutsourcing.com/wp-content/uploads/2021/05/phone.png"> <?php echo $phone; ?></th></tr>
                                                            <tr><th class="staff-email" style="font-family: 'Poppins', sans-serif; font-size: 14px; color:#11477c; line-height: 22px; font-weight: 400;"><img width="18px" src="https://clarkoutsourcing.com/wp-content/uploads/2021/05/email.png"> <?php echo $email; ?></th></tr>
                                                            <tr><th class="staff-skype" style="font-family: 'Poppins', sans-serif; font-size: 14px; color:#11477c; line-height: 22px; font-weight: 400;"><img width="18px" src="https://clarkoutsourcing.com/wp-content/uploads/2021/05/skype.png"> <?php echo $skypeid; ?></th></tr>
                                                        </tbody></table>
                                                    </th>
                                                </tr>
                                            </tbody></table>

                                        </th>
                                    </tr>
                                    <tr style="height:2px;">
                                        <th style="font-size: 0.6em; color: #88151a; padding: 0 !important;">
                                            <table style="width: 100%; margin: auto;">
                                                <tbody><tr style=" font-family: 'Poppins', sans-serif;">
                                                    <th style="width: 25%; text-align: left; padding-left: 5px;"><a style="color: #fff; text-decoration:none; position: relative; z-index: 3; font-weight: 400;" href="https://clarkoutsourcing.com/" target="_blank" rel="noopener">www.clarkoutsourcing.com</a></th>
                                                    <th style="width: 75%; text-align: right; padding-right: 10px; font-weight: 600;">&nbsp; <span style="color:#0d4b80;">US:</span>+1-727-601-0091&nbsp;|&nbsp;<span style="color:#0d4b80;">UK:</span>+44-204-586-3884&nbsp;|&nbsp;<span style="color:#0d4b80;">AUS:</span>+61-279-087-949&nbsp;|&nbsp;<span style="color:#0d4b80;">PH:</span>+0286727883 &nbsp;|&nbsp;<span style="color:#0d4b80;">Toll-free:</span>+1-800-373-5589&nbsp;</th>
                                                </tr>
                                            </tbody></table>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            </div>
                            <br><br>
                                <div class="d-grid" style="width:710px; margin-top:1rem; margin-left:1rem;">                                    
                                <input type=button class="btn btn-primary" value="Download" onClick="download()">  &nbsp;<input type=button class="btn btn-primary" value="Copy to Clipboard" onClick="copytable('email-signature-section')"> &nbsp;<a href="https://clarkoutsourcing.com/email-signature-template/" class="btn btn-primary" >Return</a>
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
       <!--  <script src="/js/scripts.js"></script> -->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
     <!--    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
    </body>
</html>
