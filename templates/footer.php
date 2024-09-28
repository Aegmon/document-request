<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


<!-- Chart JS -->
<script src="assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<!-- <script src="assets/js/plugin/chart-circle/circles.min.js"></script> -->

<!-- Datatables -->
<script src="assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Sweet Alert -->
<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Atlantis JS -->
<script src="assets/js/atlantis.min.js"></script>

<script type="text/javascript" src="assets/webcamjs/webcam.min.js"></script>

<script src="assets/js/customFunction.js"></script>
<script src="assets/js/helpers.js"></script>

<script>
    var $window = $(window);
    $window.on("load", function() {
        // Preloader
        $(".preloader").fadeOut(500);
    });
</script>

 <script>
document.getElementById('birthdate').addEventListener('change', function() {
  const birthdate = new Date(this.value);
  const today = new Date();

  let age = today.getFullYear() - birthdate.getFullYear();
  const monthDiff = today.getMonth() - birthdate.getMonth();
  const dayDiff = today.getDate() - birthdate.getDate();

  // Adjust age if the birthday hasn't occurred this year yet
  if (monthDiff < 0 || (monthDiff === 0 && dayDiff < 0)) {
    age--;
  }

  // Set age or clear it if invalid
  document.getElementById('age').value = age >= 0 ? age : '';
});

      // Function to show or hide the ID upload fields based on selection
    function toggleIdUpload() {
      const is4PsYes = document.querySelector('input[name="is_4ps"]:checked').value === '1';
      const isPwdYes = document.querySelector('input[name="is_pwd"]:checked').value === '1';

      // Show/hide 4Ps ID upload field
      const id4PsUpload = document.getElementById('4ps_id_upload');
      id4PsUpload.classList.toggle('hidden', !is4PsYes);

      // Show/hide PWD ID upload field
      const idPwdUpload = document.getElementById('pwd_id_upload');
      idPwdUpload.classList.toggle('hidden', !isPwdYes);
    }

    // Add event listeners for radio buttons
    document.querySelectorAll('input[name="is_4ps"]').forEach(radio => {
      radio.addEventListener('change', toggleIdUpload);
    });

    document.querySelectorAll('input[name="is_pwd"]').forEach(radio => {
      radio.addEventListener('change', toggleIdUpload);
    });
  </script>
    <script>
  document.getElementById('password').addEventListener('input', function() {
    const password = this.value;
    const errorMessage = document.getElementById('password-error');
    
    // Regular expression to check password requirements
    const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    
    if (!regex.test(password)) {
        errorMessage.style.display = 'block';
    } else {
        errorMessage.style.display = 'none';
    }
});

  </script>