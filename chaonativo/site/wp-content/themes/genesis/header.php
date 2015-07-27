<?php
/**
 * WARNING: This file is part of the core Genesis framework. DO NOT edit
 * this file under any circumstances. Please do all modifications
 * in the form of a child theme.
 *
 * Handles the header structure.
 *
 * @package Genesis
 */
do_action( 'genesis_doctype' );
do_action( 'genesis_title' );
do_action( 'genesis_meta' );

wp_head(); /** we need this for plugins **/
?>
<?php if(is_home()):?>
<style>
body {
	background: url(http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/topo-home.jpg) no-repeat center top;
	color: #555555;
	font-size: 12px;
	font-family: Georgia, "Times New Roman", Times, serif;
	margin: 0 auto 0;
	padding: 0;
	line-height: 20px;
	}
</style>
<?php endif;?>
<style>
.topo {
	width:960px;
	margin:0 auto 0;
	padding:0;
}
.menu-1 {
	width:333px;
	height:73px;
	float:left;
	margin:0;
	padding:0;
}

.logo-p {
	width:160px;
	height:166px;
	float:left;
	margin:0 0 0 60px;
	padding:0;
}

.menu-2 {
	width:370px;
	height:73px;
	float:right;
	margin:0 -20px 0 0;
	padding:0;
}
</style>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<body onLoad="MM_preloadImages(
'http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/btn-01h.png',
'http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/btn-02h.png',
'http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/btn-03h.png',
'http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/btn-04h.png',
'http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/btn-05h.png',
'http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/btn-06h.png')" <?php body_class(); ?>>
<?php
do_action( 'genesis_before' );
?>
<div class="topo">

<div class="menu-1">
<a href="http://allanjuniorian.com.br/chaonativo/site/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/btn-01h.png',1)"><img src="http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/btn-01.png" width="90"  height="55" id="Image2"></a>

<a href="http://allanjuniorian.com.br/chaonativo/site/cardapio/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/btn-05h.png',1)"><img src="http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/btn-05.png" width="100" height="55" id="Image5"></a>

<a href="http://allanjuniorian.com.br/chaonativo/site/?page_id=45" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/btn-03h.png',1)"><img src="http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/btn-03.png" width="130"  height="55" id="Image4"></a>



</div>

<div class="logo-p">
<a href="http://allanjuniorian.com.br/chaonativo/site/" title="Fogão Nativo | Pizzaria e Restauranre"><img src="http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/logo.jpg" /></a>
</div>

<div class="menu-2">

<a href="http://allanjuniorian.com.br/chaonativo/site/frases-nativas" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/btn-06h.png',1)"><img src="http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/btn-06.png"  height="55" id="Image6"></a>

<a href="http://allanjuniorian.com.br/chaonativo/site/galeria-sig/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image38','','http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/btn-02h.png',1)"><img src="http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/btn-02.png"  height="55" id="Image3"></a>

<a href="http://allanjuniorian.com.br/chaonativo/site/?page_id=48" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image78','','http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/btn-04h.png',1)"><img src="http://allanjuniorian.com.br/chaonativo/site/wp-content/themes/fogaonativo/images/btn-04.png" height="55" id="Image5"></a>
  
 </div>

</div>
<div id="wrap">
<?php genesis_before_header(); ?>
<?php genesis_header(); ?>
<?php genesis_after_header(); ?>
<div id="inner">