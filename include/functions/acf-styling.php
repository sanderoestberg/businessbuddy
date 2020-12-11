<?php function my_acf_admin_head() {
    ?>
    <style type="text/css">

    .acf-field-message{
	background-color: #f1f1f1 !important;
    color: #37393C;
	}
	.acf-field-message .acf-label{
		display: none !important;
    }
	.acf-field-message .acf-input p{
		font-size: 16px;
        text-align: center;
        margin-block-start: 0px;
        margin-block-end: 0px;
        font-weight: bold;
        color: #37393C;

}

    </style>
    <?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head'); ?>
