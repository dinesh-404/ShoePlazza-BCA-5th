<div class="cursor"></div>
<div class="innercursor"></div>
<script>
    <?php
    if (isset($_REQUEST['err'])) {
    ?>
      alert(<?php echo $_REQUEST['err'] ?>);
    <?php
    }
    ?>
  </script>
<script src="resources/js/cursor.js"></script>