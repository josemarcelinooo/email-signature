$(function () {
  const inputImage = document.getElementById("file-upload");
  const cropButton = document.getElementById("cropButton");
  const image = document.getElementById("image");
  const imageCropperModal = $("#imageCropperModal");

  let cropper;

  inputImage.addEventListener("change", (e) => {
    const file = e.target.files[0];

    if (file) {
      const reader = new FileReader();
      reader.onload = (e) => {
        image.src = e.target.result;
        image.style.display = "block";

        // Show the modal
        imageCropperModal.modal("show");

        // Adjust the image container dimensions
        imageCropperModal.on("shown.bs.modal", () => {
          const modalWidth = imageCropperModal.find(".modal-content").width();
          const modalHeight = imageCropperModal.find(".modal-content").height();
          image.parentElement.style.width = `100%`;
          image.parentElement.style.height = `600px`;
          image.parentElement.style.paddingBottom = "0";

          if (cropper) {
            cropper.destroy();
          }

          cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 1,
            minCropBoxWidth: 100,
            minCropBoxHeight: 100,
          });
        });
      };
      reader.readAsDataURL(file);
    }
  });

  cropButton.addEventListener("click", () => {
    if (cropper) {
      const croppedImageDataURL = cropper.getCroppedCanvas({
        width: 600,
        height: 600,
      }).toDataURL();
      
      // Set the src of the image element to the data URL of the cropped image
      image.src = croppedImageDataURL;

      // Store the cropped image data URL in the hidden input element
      document.getElementById("croppedImage").value = croppedImageDataURL;


      // Destroy the cropper instance and remove any cropping UI
      cropper.destroy();
      cropper = null;

      // Close the modal
      imageCropperModal.modal("hide");
    } else {
      alert("Please upload an image and adjust the crop area before cropping.");
    }
  });
});