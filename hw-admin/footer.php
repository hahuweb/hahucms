<?php

/**
 *  Footer
 * 
 */
?>


<!-- secript -->
<script src="../hw-includes/assets/js/jquery-3.1.0.min.js"></script>
<script src="../hw-includes/assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/media.js"></script>

<?php
if (page_name() == 'post-new' or page_name() == 'post-edit') {
?>
    <!-- Trumbowyg -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.2/trumbowyg.min.js"></script>
<?php
}
?>
<script>
    $(document).ready(function() {
        /* $(document).on('change', '#file', function() {
             var name = document.getElementById("file").files[0].name;
             var form_data = new FormData();
             var ext = name.split('.').pop().toLowerCase();
             if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                 alert("Invalid Image File");
             }
             var oFReader = new FileReader();
             oFReader.readAsDataURL(document.getElementById("file").files[0]);
             var f = document.getElementById("file").files[0];
             var fsize = f.size || f.fileSize;
             if (fsize > 2000000) {
                 alert("Image File Size is very big");
             } else {
                 form_data.append("file", document.getElementById('file').files[0]);
                 $.ajax({
                     url: "uplod.php",
                     method: "POST",
                     data: form_data,
                     contentType: false,
                     cache: false,
                     processData: false,
                     beforeSend: function() {
                         $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
                     },
                     success: function(data) {
                         $('#uploaded_image').html(data);
                     }
                 });
             }
         });*/
    });
</script>
</body>

</html>