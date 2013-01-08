<?php

/**
 *  Admin CSS
 */

?>

/* ***************************************
	SETTINGS
*****************************************/
.elggzone-options-panel {
	background-color: #333;
	border: 1px solid #444;
	margin-top: 15px;
	width: 100%;
}
.elggzone-wrapper {
	background-color: #F0F0F0;
	border: 2px solid #FFFFFF;
	min-height: 300px;
	margin: 20px;
	
	color: #222222;
	padding:15px;
}
.elggzone-wrapper .elgg-button {
	font-size: 14px;
	font-weight: normal;
	text-decoration: none;

	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;

	width: auto;
	padding: 6px 10px;
	cursor: pointer;
}
.elggzone-wrapper .elgg-tabs {
	margin-bottom: 5px;
	border-bottom: 1px solid #ccc;
	display: table;
	width: 100%;
}
.elggzone-wrapper .elgg-tabs li {
	float: left;
	border: 1px solid #CCCCCC;
	border-bottom-width: 0;
	background: #dedede;
	margin: 0 2px 0 0;
}
.elggzone-wrapper .elgg-tabs a {
	text-decoration: none;
	display: block;
	padding: 6px 20px 2px;
	text-align: center;
	height: 23px;
	color: #777;
}
.elggzone-wrapper .elgg-tabs a:hover {
	background: #F0F0F0;
	color: #333;
}
.elggzone-wrapper .elgg-tabs .elgg-state-selected {
	border-color: #ccc;
	background: #F0F0F0;
}
.elggzone-wrapper .elgg-tabs .elgg-state-selected a {
	color: #333;
	position: relative;
	top: 2px;
	background: #F0F0F0;
}
.elggzone-settings {
	width: 480px;
    padding: 30px;
    border: 1px solid #CCC;
    
    -moz-box-shadow: inset 0 0 2px #FFFFFF;
    -webkit-box-shadow: inset 0 0 2px #FFFFFF;
    box-shadow: inset 0 0 2px #FFFFFF;
}
.elggzone-settings {
    margin-top: 20px;
}
.elggzone-settings .label {
	font-size: 1.2em;
    font-weight: bold;
}
.elggzone-settings .elgg-input-text {
	width: 40px;
}
.elggzone-settings .elgg-input-text,
.elggzone-settings .elgg-input-dropdown {
	float: right;
	margin-left: 8px;
}
.elggzone-settings .elgg-list li {
	padding: 10px 10px 8px;
    margin-bottom: 3px;
}
.elggzone-settings .no {
	border: 1px solid #CCC;
	background: none;
}
.elggzone-settings .sidebar,
.elggzone-settings .sidebar_alt {
	border: 1px solid #B4C25C;
	background: #F5F7E9;
}
.elggzone-settings .elgg-list li #title {
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
.elggzone-settings #target {
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
