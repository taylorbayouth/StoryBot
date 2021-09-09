<?php
include "incs/commons.class.php";
include "incs/story.class.php";
include "incs/db.inc.php";
include "incs/header.inc.php";

$c = new common();
?>


<div class="chart" id="collapsable-example"></div>
<script src="js/treant/raphael.js"></script>
<script src="js/treant/Treant.js"></script>

<script src="js/treant/jquery.min.js"></script>
<script src="js/treant/jquery.easing.js"></script>


<script src="js/treant/collapsable.js"></script>
<script>
	if ( typeof(chart_config) != "undefined" ) {

    	tree = new Treant( chart_config );

    } else {

    	alert("Missing var: chart_config. Check that all JS files are properly included.");

    }
</script>

<?php
include "incs/footer.inc.php"
?>