<?php

/**
 *  Admin CSS
 */

?>

/* ***************************************
	SETTINGS
*****************************************/
.elgg-form-river-addon-admin-settings,
.elgg-form-river-addon-admin-announcements{
	width: 460px;
    padding:30px;
    border:1px solid #CCC;
}
.elgg-form-river-addon-admin-settings,
.elgg-form-river-addon-admin-announcements{
    margin-top: 20px;
}
.elgg-form-river-addon-admin-settings .label,
.elgg-form-river-addon-admin-announcements .label{
	font-size: 1.2em;
    font-weight: bold;
}
.elgg-form-river-addon-admin-settings .elgg-input-text {
	width: 40px;
}
.elgg-form-river-addon-admin-settings .elgg-input-text,
.elgg-form-river-addon-admin-settings .elgg-input-dropdown,
.elgg-form-river-addon-admin-announcements .elgg-input-dropdown{
	float: right;
	margin-left: 8px;
}
.elgg-form-river-addon-admin-settings .elgg-list li {
	padding: 10px 10px 8px;
    margin-bottom: 3px;
}
.elgg-form-river-addon-admin-settings .no {
	border: 1px solid #CCC;
	background: none;
}
.elgg-form-river-addon-admin-settings .sidebar,
.elgg-form-river-addon-admin-settings .sidebar_alt {
	border: 1px solid #B4C25C;
	background: #F5F7E9;
}
.elgg-form-river-addon-admin-settings .elgg-list li #title {
    vertical-align: top;
    display: inline-block;
}
.elgg-handle {
	cursor: move;
    display: inline-block;
    padding-right: 10px;
}
.elgg-handle-bar {
    display: block;
    width: 24px;
    height: 2px;
    background-color: #ECECEC;
    
    -webkit-border-radius: 1px;
    -moz-border-radius: 1px;
    border-radius: 1px;
    
    -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
    -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
}
.elgg-handle .elgg-handle-bar + .elgg-handle-bar {
  margin-top: 3px;
}
.elgg-form-river-addon-admin-settings #target {
	padding: 10px;
    height: auto;
}
/* ***************************************
	MULTISELECT
*****************************************/
.ui-multiselect {
	padding:2px 0 2px 4px;
	text-align:left;
    float: right;
    width: 200px !important;
    background: transparent;
    border: 1px solid #CCC;
}
.ui-multiselect-menu {
	display:none;
	padding:3px;
	position:absolute;
	z-index:10000;
	text-align: left;
}
.ui-multiselect-checkboxes {
	position:relative /* fixes bug in IE6/7 */;
	overflow-y:scroll
}
.ui-multiselect-checkboxes label {
	cursor:default;
	display:block;
	border:1px solid transparent;
	padding:3px 1px;
}
.ui-multiselect-checkboxes label input {
	position:relative;
	top: 2px;
    margin-right: 10px;
}
.ui-multiselect-checkboxes li {
	clear:both;
	font-size:0.9em;
	padding-right:3px;
}
.ui-multiselect-checkboxes li label:hover {
	background: #DCDCDC;
    cursor: pointer;
}
* html .ui-multiselect-checkboxes label {
	border:none;
}
.ui-widget-content {
	border: 1px solid #dddddd;
	background: #eeeeee;
	color: #333333;
}
.ui-widget-content a {
	color: #333333;
}
.ui-widget-header {
	border: 1px solid #999;
    height: 16px;
    padding: 5px;
	background: #3399FF;
}
.ui-widget-header a {	
	color: #FFF;
}
.ui-multiselect-header ul li {
	float:left;
	padding:0 10px 0 0;
}
.ui-multiselect > span.ui-icon {
	width: 0; 
	height: 0; 
	border-left: 4px solid transparent;
	border-right: 4px solid transparent;	
	border-top: 4px solid #000; 
    margin: 5px 1px 0 0;
	float: right; 
}
