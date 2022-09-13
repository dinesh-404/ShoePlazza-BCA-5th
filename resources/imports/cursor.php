<div class="cursor"></div>
<div class="innercursor"></div>
<div id="pls">

    <div class="loader" id="animation"><div class="loader-inner" id="inner"></div></div>
</div>
<button class="gototop" id="gototop" onclick="scolltop()"></button>
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