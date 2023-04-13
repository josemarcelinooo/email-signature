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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
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

            function copyHTML() {
			  // Select the HTML content to copy
			  var htmlContent = document.getElementById("email-signature").innerHTML;

			  // Create a range object and select the HTML content
			  var range = document.createRange();
			  range.selectNodeContents(document.getElementById("email-signature"));
			  window.getSelection().addRange(range);

			  // Copy the selected HTML content to the clipboard
			  document.execCommand("copy");

			}

            function download() {

          // Specify the desired width and height of the image
          const width = 1440;
          const height = 432;
          // Specify the desired DPI (dots per inch)
          const dpi = 90;
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
    </head>
    <body id="template-body">

        <section class="toolbar">
	        <div class="container-fluid">
	          <div class="row">
	            <div class="col-6">
	              <label class="title-bar">Clark Outsourcing Signature</label>
	            </div>
	            <div class="col-6 text-end">
	              <input type=button class="btn btn-primary" value="Download" onClick="download()">
                <a class="btn btn-primary" href="https://clarkoutsourcing.com/email-signature-template/">Return</a>
	              <!-- <button type="button" class="btn btn-primary" onclick="history.back()">Return</buttons> -->
	            </div>
	          </div>
	        </div>
	    </section>
      <section id="email-signature" class="d-flex">
        <link href="https://clarkoutsourcing.com/email-signature-template/css/template.css" rel="stylesheet" />
        <div class="container-fluid email-signature-section" id="email-signature-section">
          <div class="row">
            <div class="col-12 email-signature-row">
              <div class="template-top">
                <div class="site-logo"><img width="180" src="https://clarkoutsourcing.com/wp-content/uploads/2021/05/co-logo-v2.png"></div>
                <div class="row">
                  <div class="col-5 template-image">
                    <div style="border: 4px solid #88151a;border-radius:50%; background:white; margin-top: 10px; background-image: url(https://clarkoutsourcing.com/email-signature-template/images/<?php echo $img; ?>); background-repeat: no-repeat; background-size: cover; background-position: center; width: 220px; height: 220px; margin: auto; margin-right: 19%; position: relative; z-index: 2;">
                    </div>
                  </div>
                  <div class="col-7" style="margin-left: -75px;">
                     <table style="width: 100%; text-align: left">
                        <tbody><tr><th class="staff-name" style="font-family: 'Poppins', sans-serif; font-size: 2.8rem; line-height: 22px; color:#71202d;  padding-top: 6%;"><?php echo $fname; ?></th></tr>
                          <tr><th class="staff-position" style="font-family: 'Poppins', sans-serif; padding-top:10px; font-size: 1.5rem; color:#71202d; font-weight: 400;"><?php echo $position; ?></th></tr>
                          <tr><th class="staff-phone" style="font-family: 'Poppins', sans-serif; font-size: 1.3rem; color:#11477c;padding-top: 8px; line-height: 22px; font-weight: 400;"><img width="35" src="https://clarkoutsourcing.com/wp-content/uploads/2021/05/phone.png" style="margin-right: 5px;"> <?php echo $phone; ?></th></tr>
                          <tr><th class="staff-email" style="font-family: 'Poppins', sans-serif; font-size: 1.3rem; color:#11477c; line-height: 22px; font-weight: 400; padding-top:5px; padding-bottom: 5px;"><img width="35" src="https://clarkoutsourcing.com/wp-content/uploads/2021/05/email.png" style="margin-right: 5px;"> <?php echo $email; ?></th></tr>
                          <tr><th class="staff-skype" style="font-family: 'Poppins', sans-serif; font-size: 1.3rem; color:#11477c; line-height: 22px; font-weight: 400;"><img width="35" src="https://clarkoutsourcing.com/wp-content/uploads/2021/05/skype.png" style="margin-right: 10px;"><?php echo $skypeid; ?></th></tr>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
              <div class="template-bottom">
                <div class="row">
                  <div class="col-12">
                    <table>
                      <tbody>
                      <tr style=" font-family: 'Poppins', sans-serif;">
                        <th style="width: 25%; text-align: left; padding-left: 10px;">
                          <a style="color: #fff; text-decoration:none; position: relative; z-index: 3; font-size: .9rem; font-weight: 400;" href="https://clarkoutsourcing.com/" target="_blank" rel="noopener">www.clarkoutsourcing.com</a>
                        </th>
                        <th style="width: 75%; text-align: right; padding-right: 10px; font-weight: 600;">&nbsp; <span style="color:#0d4b80;">US:</span>+1-727-601-0091&nbsp;|&nbsp;<span style="color:#0d4b80;">UK:</span>+44-204-586-3884&nbsp;|&nbsp;<span style="color:#0d4b80;">AUS:</span>+61-279-087-949&nbsp;|&nbsp;<span style="color:#0d4b80;">PH:</span>+0286727883 &nbsp;|&nbsp;<span style="color:#0d4b80;">Toll-free:</span>+1-800-373-5589&nbsp;
                        </th>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      

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