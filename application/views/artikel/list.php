<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/wysiwyg/lib/css/bootstrap.min.css"></link>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/wysiwyg/lib/css/prettify.css"></link>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/wysiwyg/src/bootstrap-wysihtml5.css"></link>

<style type="text/css" media="screen">
	.btn.jumbo {
		font-size: 20px;
		font-weight: normal;
		padding: 14px 24px;
		margin-right: 10px;
		-webkit-border-radius: 6px;
		-moz-border-radius: 6px;
		border-radius: 6px;
	}
</style>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30181385-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div class="container">
    <div id="page-wrapper">
		<div class="hero-unit" style="margin-top:40px">
			<h1 style="font-size:58px">bootstrap-wysihtml5 <small>Simple, beautiful wysiwyg editors</small></h1>
			<hr/>
			<textarea class="textarea" placeholder="Enter text ..." style="width: 810px; height: 200px"></textarea>
		</div>
	</div>
</div>


<script src="<?php echo base_url();?>/assets/wysiwyg/lib/js/wysihtml5-0.3.0.js"></script>
<script src="<?php echo base_url();?>/assets/wysiwyg/lib/js/jquery-1.7.2.min.js"></script>
<script src="<?php echo base_url();?>/assets/wysiwyg/lib/js/prettify.js"></script>
<script src="<?php echo base_url();?>/assets/wysiwyg/lib/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/wysiwyg/src/bootstrap-wysihtml5.js"></script>

<script>
	$('.textarea').wysihtml5();
</script>

<script type="text/javascript" charset="utf-8">
	$(prettyPrint);
</script>

</body>
</html>
