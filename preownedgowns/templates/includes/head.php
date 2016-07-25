<title><?php echo $title; ?></title>


<?php
                //null out variables if they're not set to prevent undefined variable warnings
                //set some default values to give keywords and description if page specific values are not given
                if(!isset($meta_keys)) $meta_keys = NULL;
                $default_meta_keys = 'used wedding dress, designer &amp; sample wedding dress, bridesmaid dress, prom dress, monique lhuillier, vera wang, PreOwnedGowns.com';
                
                if(!isset($meta_desc)) $meta_desc = NULL;
                $default_meta_desc = 'Wedding dresses, wedding gowns, bridesmaid dresses, prom dresses, evening wear from top designers for sale. New, sample and used wedding dresses from Vera Wang, Monique Lhuillier, Melissa Sweet, Pnina Tornai, and more.  Sell your wedding dress Today!';
?>
<meta name="keywords" content="<?php echo ($meta_keys) ? ($meta_keys) : ($default_meta_keys); ?>" />
<meta name="description" content="<?php echo ($meta_desc) ? ($meta_desc) : ($default_meta_desc); ?>" />
<meta name="robots" content="INDEX,FOLLOW" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
<link href="/assets/css/layout.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/assets/css/nyroModal.full.css" type="text/css" media="screen" />
<link href="/assets/uploader/css/plupload.queue.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="/assets/js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.tools.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.galleriffic.js"></script>
<script type="text/javascript" src="/assets/js/jquery.opacityrollover.js"></script>
<script type="text/javascript" src="/assets/js/jquery.blockUI.js"></script>
<script type="text/javascript" src="/assets/js/jquery.nyroModal-1.6.2.min.js"></script>
<script type="text/javascript" src="/assets/js/ui.expandable.js"></script>
<script type="text/javascript" src="/assets/js/maxheight.js"></script>