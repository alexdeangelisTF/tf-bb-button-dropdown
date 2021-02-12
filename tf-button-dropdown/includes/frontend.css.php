<?php

/*Instance CSS goes here*/

?>

.tf-dropdown-<?php echo $id; ?> .hide,
.tf-dropdown-<?php echo $id; ?> .button-wrap.hide {
	display:none !important;
}
.tf-dropdown-<?php echo $id; ?> .button-wrap {
	display:inline-block;
}
.tf-dropdown-<?php echo $id; ?> .tf-dropdown-menu.show {
	display:block;
}
.tf-dropdown-<?php echo $id; ?> .tf-dropdown-menu {
	position: absolute;
	background-color: #f1f1f1;
	min-width: 160px;
	overflow: auto;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index:1;
}
.tf-dropdown-<?php echo $id; ?> .tf-dropdown-menu a {
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
}
.tf-dropdown-<?php echo $id; ?> .tf-dropdown-menu a:hover {
	background-color:#ddd;
}