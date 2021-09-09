<?php
include "incs/commons.class.php";
include "incs/story.class.php";
include "incs/db.inc.php";
include "incs/header.inc.php";

$c = new common();
//$s = new Story();
?>





<div class="chart" id="collapsable-example"></div>
<script src="js/treant/raphael.js"></script>
<script src="js/treant/Treant.js"></script>

<script src="js/treant/jquery.min.js"></script>
<script src="js/treant/jquery.easing.js"></script>


<script src="js/treant/collapsable.js"></script>
<script>
    tree = new Treant( chart_config );
</script>





<?php
include "incs/footer.inc.php"
?>