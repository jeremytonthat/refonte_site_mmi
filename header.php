<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>


<!-- Mettre le code a partir d'ici -->

<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<div class="codesvg">
<svg version="1.1" viewBox="0 0 1366 768" preserveAspectRatio="xMinYMin meet" class="svg-content">
<style type="text/css">
	body{
		background-color: #BCAAA4;
	}
	.codesvg {
			display: inline-block;
			position: relative;
			width: 100%;
			padding-bottom: 100%;
			vertical-align: middle;
			overflow: hidden;
		}
	.svg-content {
			display: inline-block;
			position: absolute;
			top: 0;
			left: 0;
	}
	.st0{fill:#BCAAA4;}
	.st1{fill:#FFFFFF;}
	.st2{fill:#444445;}
	.st3{fill:#E0E0E0;}
	.st4{fill:#59595A;}
	.st5{fill:none;}
	.st6{fill:#444545;}
	.st7{fill:#F9F4B6;}
	.st8{fill:#A7D4F0;}
	.st9{fill:#F2858D;}
	.st10{fill:#92D0B8;}
	.trait1{
		fill:none;
		stroke:#FBB03B;
		stroke-width:4;
		stroke-linecap:round;
		stroke-miterlimit:10;
		stroke-dasharray: 25 150;
		-webkit-animation-name: vent; 
		-webkit-animation-duration: 3s;
		animation: vent 3s linear infinite;
		animation-delay: 1s;
	}
	.trait2{
		fill:none;
		stroke:#FBB03B;
		stroke-width:4;
		stroke-linecap:round;
		stroke-miterlimit:10;
		stroke-dasharray: 25 150;
		-webkit-animation-name: vent; 
		-webkit-animation-duration: 3s;
		animation: vent 3s linear infinite;
		animation-delay: 2.2s;
	}
	.trait3{
		fill:none;
		stroke:#FBB03B;
		stroke-width:4;
		stroke-linecap:round;
		stroke-miterlimit:10;
		stroke-dasharray: 25 150;
		-webkit-animation-name: vent; 
		-webkit-animation-duration: 3s;
		animation: vent 3s linear infinite;
		animation-delay: 3s;
	}
	.st12{fill:#A67C52;}
	.st13{fill:#8C6239;}
	.st14{
		fill:none;
		stroke:#444545;
		stroke-width:6;
		stroke-linecap:round;
		stroke-miterlimit:10;
	}
	.st15{
		fill:none;
		stroke:#FF1D25;
		stroke-width:4;
		stroke-linecap:round;
		stroke-miterlimit:10;
	}
	.m1{
		fill:none;
		stroke:#FFFFFF;
		stroke-width:3;
		stroke-miterlimit:10;
		stroke-dasharray: 800;
		stroke-dashoffset:0;
		-webkit-animation-name: bouge; 
		-webkit-animation-duration: 4s; 
		animation: bouge 4s linear forwards;
		animation-delay: 1s;
	}
	.m2{
		fill:none;
		stroke:#FFFFFF;
		stroke-width:3;
		stroke-miterlimit:10;
		stroke-dasharray: 800;
		stroke-dashoffset:0; 
		-webkit-animation-name: bouge; 
		-webkit-animation-duration: 4s;
		animation: bouge 4s linear forwards;
		animation-delay: 3.2s;
	}
	.i{
		fill:none;
		stroke:#FFFFFF;
		stroke-width:3;
		stroke-miterlimit:10;
		stroke-dasharray: 800;
		stroke-dashoffset:0;
		-webkit-animation-name: bouge; 
		-webkit-animation-duration: 4s; 
		animation: bouge 4s linear forwards;
		animation-delay: 5s;
	}
	   #minute{
		transform-origin: 50% 100%;
		transform-box:fill-box;
		-webkit-animation-name: rotate; 
		-webkit-animation-duration: 3600s;
		animation: rotate 3600s infinite linear;
	}
	#seconde{
		transform-origin: 50% 100%;
		transform-box:fill-box;
		-webkit-animation-name: rotate; 
		-webkit-animation-duration: 60s;
		animation: rotate 60s infinite steps(60);
	}
	#heure{
		transform-origin: 50% 100%;
		transform-box:fill-box;
		-webkit-animation-name: rotate; 
		-webkit-animation-duration: 216000s;
		animation: rotate 216000s infinite linear;
	}
	#pendulegauche{
		fill:none;
		stroke-width:6;
		stroke-linecap:round;
		stroke-miterlimit:10;
		transform-origin: top;
		transform-box:fill-box;
		-webkit-animation-name: moveIt; 
		-webkit-animation-duration: 2.5s;
		animation: moveIt 2.5s ease-in-out infinite ;

	}
	#penduledroite{
		fill:none;
		stroke-width:6;
		stroke-linecap:round;
		stroke-miterlimit:10;
		transform-origin: top;
		transform-box:fill-box;
		-webkit-animation-name: moveit; 
		-webkit-animation-duration: 2.5s;
		animation: moveit 2.5s ease-in-out infinite ;
		animation-delay:1s;
	}

	@keyframes moveIt {
		  0%, 50% {
		    transform: rotate(45deg);
		  }
		    50%,100% {
		    transform: rotate(0deg);
		  }
	}
	@keyframes moveit {
		  0%, 50% {
		    transform: rotate(0deg);
		  }
		    50%,100% {
		    transform: rotate(-45deg);
		  }
	}

	@-webkit-keyframes bouge {
		from{
		stroke-dashoffset: 800;
		}
		to{
		stroke-dashoffset: 0;
		}
	}
	@keyframes vent{
				0%{stroke-dashoffset: 175; }
				100%{stroke-dashoffset: 0;}
			}
	@keyframes rotate { 100% 
		{
    		transform: rotate(360deg);
  		}
	}
</style>
<g id="fond">
	<rect x="-51" y="-24" class="st0" width="1470" height="837"/>
	<rect x="176" y="77" class="st1" width="176" height="177"/>
</g>
<g id="bureau">
	<g id="bureau_1_">
		<g>
			<g>
				<path class="st2" d="M1280.9,580.1c-0.1-0.2-0.1-0.4-0.2-0.6c-0.1-0.1-0.1-0.2-0.2-0.3l-17.8-33.2c-0.5-1-1.6-1.6-2.7-1.6H115
					c-1.1,0-2.2,0.6-2.7,1.6l-17.8,33.2c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.2-0.2,0.4-0.2,0.6c-0.1,0.3-0.1,0.6-0.1,0.8
					c0,0.6,0.2,1.1,0.4,1.6c0.6,1,1.6,1.5,2.7,1.5h1180.9c1.1,0,2.1-0.6,2.7-1.5c0.3-0.5,0.4-1,0.4-1.6
					C1281,580.7,1281,580.3,1280.9,580.1z M102.2,577.8l14.6-27.3H1258l14.6,27.3H102.2z"/>
				<polygon class="st3" points="1272.7,577.8 102.2,577.8 116.8,550.5 1258,550.5 				"/>
			</g>
		</g>
		<g>
			<path class="st2" d="M328.3,668.4V768h-6.2v-99.6c0-1.7,1.4-3.1,3.1-3.1C327,665.3,328.3,666.7,328.3,668.4z"/>
		</g>
		<g>
			<path class="st2" d="M325.2,665.3c1.7,0,3.1,1.4,3.1,3.1v3.1h718.2v-3.1c0-1.7,1.4-3.1,3.1-3.1H325.2z M1069.2,665.3H305.7
				c-1.7,0-3.1,1.4-3.1,3.1V768h6.2v-96.4h757.3V768h6.2v-99.6C1072.3,666.7,1070.9,665.3,1069.2,665.3z M1280.9,580.1
				c-0.1-0.2-0.1-0.4-0.2-0.6c-0.1-0.1-0.1-0.2-0.2-0.3c-0.6-0.8-1.5-1.4-2.6-1.4H97c-1.1,0-2,0.6-2.6,1.4c-0.1,0.1-0.1,0.2-0.2,0.3
				c-0.1,0.2-0.2,0.4-0.2,0.6c-0.1,0.3-0.1,0.6-0.1,0.8V768h6.2V584.1h1174.7V768h6.2V580.9C1281,580.7,1281,580.3,1280.9,580.1z
				 M325.2,665.3c1.7,0,3.1,1.4,3.1,3.1v3.1h718.2v-3.1c0-1.7,1.4-3.1,3.1-3.1H325.2z"/>
			<rect x="308.8" y="671.6" class="st3" width="13.3" height="96.4"/>
			<path class="st3" d="M100.1,584.1V768h13.8v-99.6c0-1.7,1.4-3.1,3.1-3.1h167.7c1.7,0,3.1,1.4,3.1,3.1V768h14.8v-99.6
				c0-1.7,1.4-3.1,3.1-3.1h763.5c1.7,0,3.1,1.4,3.1,3.1V768h14.3v-99.6c0-1.7,1.4-3.1,3.1-3.1h167.7c1.7,0,3.1,1.4,3.1,3.1V768h14.3
				V584.1H100.1z M848.3,645.7c0,1.7-1.4,3.1-3.1,3.1H529.7c-1.8,0-3.1-1.4-3.1-3.1v-42c0-1.7,1.4-3.1,3.1-3.1h315.5
				c1.7,0,3.1,1.4,3.1,3.1V645.7z"/>
		</g>
		<g>
			<rect x="1052.8" y="671.6" class="st3" width="13.3" height="96.4"/>
			<path class="st2" d="M1052.8,668.4V768h-6.2v-99.6c0-1.7,1.4-3.1,3.1-3.1C1051.4,665.3,1052.8,666.7,1052.8,668.4z"/>
		</g>
		<g>
			<path class="st2" d="M845.2,600.6H529.7c-1.8,0-3.1,1.4-3.1,3.1v42c0,1.7,1.4,3.1,3.1,3.1h315.5c1.7,0,3.1-1.4,3.1-3.1v-42
				C848.3,601.9,847,600.6,845.2,600.6z M842.1,642.6H532.8v-35.8h309.3V642.6z"/>
			<path class="st1" d="M532.8,606.8v35.8h309.3v-35.8H532.8z M703.1,627.8h-31.4c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1
				h31.4c1.7,0,3.1,1.4,3.1,3.1C706.3,626.4,704.9,627.8,703.1,627.8z"/>
		</g>
		<g>
			<path class="st2" d="M284.7,665.3H117c-1.7,0-3.1,1.4-3.1,3.1V768h6.2v-96.4h161.4V768h6.2v-99.6
				C287.8,666.7,286.4,665.3,284.7,665.3z"/>
			<path class="st1" d="M120.1,671.6V768h161.4v-96.4H120.1z M216.5,688.4h-31.4c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1h31.4
				c1.7,0,3.1,1.4,3.1,3.1C219.6,687,218.2,688.4,216.5,688.4z"/>
		</g>
		<g>
			<path class="st2" d="M1257.4,665.3h-167.7c-1.7,0-3.1,1.4-3.1,3.1V768h6.2v-96.4h161.4V768h6.2v-99.6
				C1260.5,666.7,1259.1,665.3,1257.4,665.3z"/>
			<path class="st1" d="M1092.8,671.6V768h161.4v-96.4H1092.8z M1189.2,688.4h-31.4c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1
				h31.4c1.7,0,3.1,1.4,3.1,3.1C1192.3,687,1190.9,688.4,1189.2,688.4z"/>
		</g>
		<g>
			<path class="st2" d="M219.6,685.3c0,1.7-1.4,3.1-3.1,3.1h-31.4c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1h31.4
				C218.2,682.2,219.6,683.6,219.6,685.3z"/>
		</g>
		<g>
			<path class="st2" d="M706.3,624.7c0,1.7-1.4,3.1-3.1,3.1h-31.4c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1h31.4
				C704.9,621.6,706.3,623,706.3,624.7z"/>
		</g>
		<g>
			<path class="st2" d="M1192.3,685.3c0,1.7-1.4,3.1-3.1,3.1h-31.4c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1h31.4
				C1190.9,682.2,1192.3,683.6,1192.3,685.3z"/>
		</g>
		<g>
			<rect x="328.3" y="671.6" class="st4" width="718.2" height="50.9"/>
			<path class="st2" d="M1052.8,725.5c0,1.7-1.4,3.1-3.1,3.1H325.2c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1h724.4
				C1051.4,722.4,1052.8,723.8,1052.8,725.5z"/>
		</g>
	</g>
</g>
<g id="pc">
	<polyline class="st5" points="1366,768 1281,768 1274.8,768 1260.5,768 1254.2,768 1092.8,768 1086.6,768 1072.3,768 1066.1,768 
		1052.8,768 1046.5,768 328.4,768 322.1,768 308.8,768 302.6,768 287.8,768 281.5,768 120.1,768 113.9,768 100.1,768 93.9,768 
		0,768 	"/>
	<g id="ordinateur">
		<g>
			<rect x="479" y="462.9" class="st3" width="407.7" height="49"/>
			<path class="st1" d="M886.7,515.7H479c-2.4,0-4.3-1.7-4.3-3.8v-49c0-2.1,1.9-3.8,4.3-3.8h407.7c2.4,0,4.3,1.7,4.3,3.8v49
				C891,514,889.1,515.7,886.7,515.7z M483.3,508.1h399.2v-41.4H483.3V508.1z"/>
		</g>
		<g>
			<rect x="479" y="242.8" class="st6" width="407.7" height="220.2"/>
			<path class="st6" d="M886.7,466.7H479c-2.4,0-4.3-1.7-4.3-3.8V242.8c0-2.1,1.9-3.8,4.3-3.8h407.7c2.4,0,4.3,1.7,4.3,3.8v220.2
				C891,465,889.1,466.7,886.7,466.7z M483.3,459.2h399.2V246.6H483.3V459.2z"/>
		</g>
		<g>
			<rect x="493.6" y="255.8" class="st4" width="378.5" height="198.1"/>
		</g>
		<g>
			<path class="st6" d="M690,495h-14.3c-1.2,0-2.2-1-2.2-2.2v-12.2c0-1.2,1-2.2,2.2-2.2H690c1.2,0,2.2,1,2.2,2.2v12.2
				C692.2,494,691.2,495,690,495z"/>
		</g>
		<g>
			<polyline class="st3" points="682.9,511.9 720.9,511.9 725.2,553.9 640.6,553.9 644.9,511.9 682.9,511.9 			"/>
			<path class="st6" d="M725.2,557.7h-84.6c-1.2,0-2.3-0.4-3.1-1.2c-0.8-0.8-1.2-1.8-1.1-2.9l4.3-42c0.2-2,2-3.5,4.2-3.5h76
				c2.2,0,4,1.5,4.2,3.5l4.3,42c0.1,1.1-0.3,2.1-1.1,2.9C727.5,557.2,726.4,557.7,725.2,557.7z M645.3,550.1h75.2l-3.5-34.4h-68.3
				L645.3,550.1z"/>
		</g>
		<g>
			<path class="st6" d="M753.6,557.7H612.2c-2.4,0-4.3-1.7-4.3-3.8c0-2.1,1.9-3.8,4.3-3.8h141.5c2.4,0,4.3,1.7,4.3,3.8
				C757.9,556,756,557.7,753.6,557.7z"/>
		</g>
		<g>
			<path class="st6" d="M886.7,515.7H479c-2.4,0-4.3-1.7-4.3-3.8v-49c0-2.1,1.9-3.8,4.3-3.8h407.7c2.4,0,4.3,1.7,4.3,3.8v49
				C891,514,889.1,515.7,886.7,515.7z M483.3,508.1h399.2v-41.4H483.3V508.1z"/>
		</g>
	</g>
</g>
<g id="haut_du_bureau_gauche">
	<g id="pot">
		<g>
			<rect x="226.8" y="488.7" class="st1" width="50" height="71.4"/>
		</g>
		<g>
			<path class="st7" d="M256.9,492.3c-0.4,0-0.9-0.1-1.3-0.3c-1.8-0.7-2.7-2.8-2-4.6l13.6-33.9c0.7-1.8,2.8-2.7,4.6-2
				c1.8,0.7,2.7,2.8,2,4.6L260.2,490C259.6,491.4,258.3,492.3,256.9,492.3z"/>
		</g>
		<g>
			<path class="st8" d="M236.9,492.3c-1.4,0-2.8-0.9-3.3-2.3l-13.4-33.9c-0.7-1.8,0.2-3.9,2-4.6c1.8-0.7,3.9,0.2,4.6,2l13.4,33.9
				c0.7,1.8-0.2,3.9-2,4.6C237.8,492.2,237.3,492.3,236.9,492.3z"/>
		</g>
		<g>
			<path class="st9" d="M266.9,492.3c-0.6,0-1.2-0.2-1.8-0.5c-1.7-1-2.3-3.2-1.3-4.9l21.3-36.8c1-1.7,3.2-2.3,4.9-1.3
				c1.7,1,2.3,3.2,1.3,4.9L270,490.5C269.3,491.6,268.1,492.3,266.9,492.3z"/>
		</g>
		<g>
			<path class="st6" d="M276.7,563.7h-50c-2,0-3.6-1.6-3.6-3.6v-71.4c0-2,1.6-3.6,3.6-3.6h50c2,0,3.6,1.6,3.6,3.6v71.4
				C280.3,562.1,278.7,563.7,276.7,563.7z M230.3,556.5h42.8v-64.3h-42.8V556.5z"/>
		</g>
	</g>
	<g id="plante">
		<g>
			<path class="st10" d="M173,441.3c-0.1,0-0.1,0-0.2,0c-2-0.1-3.5-1.8-3.4-3.8l7.7-144.2c0.1-2,1.8-3.5,3.8-3.4
				c2,0.1,3.5,1.8,3.4,3.8l-7.7,144.2C176.5,439.8,174.9,441.3,173,441.3z"/>
		</g>
		<g>
			<path class="st10" d="M174.1,421c-1,0-1.9-0.4-2.7-1.2c-1.3-1.5-1.2-3.7,0.3-5l16.2-14.5c1.5-1.3,3.7-1.2,5,0.3
				c1.3,1.5,1.2,3.7-0.3,5l-16.2,14.5C175.8,420.7,175,421,174.1,421z"/>
		</g>
		<g>
			<path class="st10" d="M177.3,362.1c-1,0-1.9-0.4-2.7-1.2l-16.7-18.6c-1.3-1.5-1.2-3.7,0.3-5c1.5-1.3,3.7-1.2,5,0.3l16.7,18.6
				c1.3,1.5,1.2,3.7-0.3,5C179,361.8,178.1,362.1,177.3,362.1z"/>
		</g>
		<g>
			<path class="st10" d="M177.3,362.1c-0.1,0-0.1,0-0.2,0c-11.7-0.6-20.7-10.7-20.1-22.4c0.1-2,1.8-3.5,3.8-3.4
				c2,0.1,3.5,1.8,3.4,3.8c-0.4,7.8,5.6,14.5,13.4,14.9c2,0.1,3.5,1.8,3.4,3.8C180.7,360.6,179.2,362.1,177.3,362.1z"/>
		</g>
		<g>
			<path class="st10" d="M174.9,421.1c-0.3,0-0.7,0-1,0c-2-0.1-3.5-1.8-3.4-3.8c0.1-2,1.8-3.5,3.8-3.4c6.5,0.4,12.1-4.7,12.4-11.2
				c0.1-2,1.8-3.5,3.8-3.4c2,0.1,3.5,1.8,3.4,3.8C193.3,413.2,184.9,421.1,174.9,421.1z"/>
		</g>
		<g>
			<path class="st10" d="M159.4,411c-1,0-1.9-0.4-2.7-1.2l-14.5-16.2c-1.3-1.5-1.2-3.7,0.3-5c1.5-1.3,3.7-1.2,5,0.3l14.5,16.2
				c1.3,1.5,1.2,3.7-0.3,5C161.1,410.7,160.3,411,159.4,411z"/>
		</g>
		<g>
			<path class="st10" d="M159.4,411c-0.1,0-0.1,0-0.2,0c-10.4-0.6-18.5-9.5-17.9-19.9c0.1-2,1.8-3.5,3.8-3.4c2,0.1,3.5,1.8,3.4,3.8
				c-0.4,6.5,4.7,12.1,11.2,12.4c2,0.1,3.5,1.8,3.4,3.8C162.9,409.6,161.3,411,159.4,411z"/>
		</g>
		<g>
			<path class="st10" d="M163.8,441.3c-1.7,0-3.3-1.3-3.5-3l-10.5-69c-0.3-1.9,1-3.8,3-4.1c2-0.3,3.8,1,4.1,3l10.5,69
				c0.3,1.9-1,3.8-3,4.1C164.2,441.3,164,441.3,163.8,441.3z"/>
		</g>
		<g>
			<rect x="148" y="437.8" class="st1" width="40.5" height="122.9"/>
			<path class="st6" d="M188.5,564.3H148c-2,0-3.6-1.6-3.6-3.6V437.8c0-2,1.6-3.6,3.6-3.6h40.5c2,0,3.6,1.6,3.6,3.6v122.9
				C192.1,562.7,190.5,564.3,188.5,564.3z M151.6,557.2H185V441.3h-33.4V557.2z"/>
		</g>
	</g>
</g>
<g id="haut_du_bureau">
	<g id="clavier_souris">
		<g>
			<path class="st6" d="M752,569.6H586.8c-1.7,0-3-1.5-3-3.3s1.4-3.3,3-3.3H752c1.7,0,3,1.5,3,3.3S753.7,569.6,752,569.6z"/>
		</g>
		<g>
			<path class="st1" d="M778.6,569.4c0-8.4,6.3-15.2,14.2-15.2S807,561,807,569.4H778.6z"/>
			<path class="st6" d="M807,572.7h-28.3c-1.7,0-3-1.5-3-3.3c0-10.2,7.7-18.4,17.2-18.4c9.5,0,17.2,8.3,17.2,18.4
				C810,571.2,808.6,572.7,807,572.7z M782.1,566.2h21.4c-1.3-5-5.6-8.6-10.7-8.6C787.7,557.5,783.4,561.2,782.1,566.2z"/>
		</g>
	</g>
	<g id="herbe">
		<g>
			<path class="st10" d="M1034.3,533.7c-1.3,0-2.4-0.9-2.7-2.2l-4.6-19.8c-0.4-1.5,0.6-3,2.1-3.4c1.5-0.4,3,0.6,3.4,2.1l4.6,19.8
				c0.4,1.5-0.6,3-2.1,3.4C1034.7,533.6,1034.5,533.7,1034.3,533.7z"/>
		</g>
		<g>
			<path class="st10" d="M1115.9,533.7c-0.2,0-0.4,0-0.6-0.1c-1.5-0.3-2.5-1.9-2.1-3.4l4.6-19.8c0.3-1.5,1.9-2.5,3.4-2.1
				c1.5,0.3,2.5,1.9,2.1,3.4l-4.6,19.8C1118.4,532.8,1117.2,533.7,1115.9,533.7z"/>
		</g>
		<g>
			<path class="st10" d="M1041.9,533.7c-1.5,0-2.7-1.2-2.8-2.6l-1.6-25.7c-0.1-1.6,1.1-2.9,2.6-3c1.6-0.1,2.9,1.1,3,2.6l1.6,25.7
				c0.1,1.6-1.1,2.9-2.6,3C1042,533.7,1041.9,533.7,1041.9,533.7z"/>
		</g>
		<g>
			<path class="st10" d="M1048,533.7c0,0-0.1,0-0.1,0c-1.6-0.1-2.8-1.4-2.7-3l1.1-21.7c0.1-1.6,1.4-2.8,3-2.7c1.6,0.1,2.8,1.4,2.7,3
				l-1.1,21.7C1050.8,532.5,1049.5,533.7,1048,533.7z"/>
		</g>
		<g>
			<path class="st10" d="M1060.4,533.7c-1.4,0-2.6-1.1-2.8-2.5l-3.2-29.1c-0.2-1.5,1-2.9,2.5-3.1c1.6-0.2,2.9,0.9,3.1,2.5l3.2,29.1
				c0.2,1.5-1,2.9-2.5,3.1C1060.6,533.6,1060.5,533.7,1060.4,533.7z"/>
		</g>
		<g>
			<path class="st10" d="M1076.1,533.1c-1.5,0-2.7-1.1-2.8-2.6l-2.1-28c-0.1-1.6,1-2.9,2.6-3c1.6-0.1,2.9,1,3,2.6l2.1,28
				c0.1,1.6-1,2.9-2.6,3C1076.2,533.1,1076.2,533.1,1076.1,533.1z"/>
		</g>
		<g>
			<path class="st10" d="M1083.2,533.7c-1.5,0-2.8-1.2-2.8-2.8l-0.2-18.9c0-1.6,1.2-2.8,2.8-2.8c0,0,0,0,0,0c1.5,0,2.8,1.2,2.8,2.8
				l0.2,18.9C1086,532.4,1084.7,533.6,1083.2,533.7C1083.2,533.7,1083.2,533.7,1083.2,533.7z"/>
		</g>
		<g>
			<path class="st10" d="M1089.2,533.6c-0.1,0-0.2,0-0.3,0c-1.5-0.2-2.7-1.5-2.5-3.1l2.6-25.7c0.2-1.5,1.5-2.6,3.1-2.5
				c1.5,0.2,2.7,1.5,2.5,3.1L1092,531C1091.8,532.5,1090.6,533.6,1089.2,533.6z"/>
		</g>
		<g>
			<path class="st10" d="M1098.2,533.7c-0.3,0-0.6,0-0.9-0.1c-1.5-0.5-2.3-2.1-1.8-3.6l8.6-25.9c0.5-1.5,2.1-2.3,3.6-1.8
				c1.5,0.5,2.3,2.1,1.8,3.6l-8.6,25.9C1100.5,533,1099.4,533.7,1098.2,533.7z"/>
		</g>
		<g>
			<path class="st10" d="M1060.7,533.7c-0.3,0-0.6,0-0.9-0.1c-1.5-0.5-2.3-2.1-1.8-3.6l7.2-21.9c0.5-1.5,2.1-2.3,3.6-1.8
				c1.5,0.5,2.3,2.1,1.8,3.6l-7.2,21.9C1063,533,1061.9,533.7,1060.7,533.7z"/>
		</g>
		<g>
			<path class="st10" d="M1107.4,533.2c-1.3,0-2.5-0.9-2.8-2.3l-4.8-24.9c-0.3-1.5,0.7-3,2.2-3.3c1.5-0.3,3,0.7,3.3,2.2l4.8,24.9
				c0.3,1.5-0.7,3-2.2,3.3C1107.7,533.2,1107.6,533.2,1107.4,533.2z"/>
		</g>
		<g>
			<rect x="1026.5" y="530.8" class="st1" width="96.6" height="33.9"/>
			<path class="st6" d="M1123.2,567.5h-96.6c-1.6,0-2.8-1.3-2.8-2.8v-33.9c0-1.6,1.3-2.8,2.8-2.8h96.6c1.6,0,2.8,1.3,2.8,2.8v33.9
				C1126,566.3,1124.7,567.5,1123.2,567.5z M1029.4,561.9h91v-28.2h-91V561.9z"/>
		</g>
	</g>
	<g id="cafe">
		<g>
			<polygon class="st1" points="977.5,563.6 981.1,512.1 931.1,512.1 934.7,563.6 			"/>
			<path class="st6" d="M977.5,566.4h-42.9c-1.5,0-2.7-1.1-2.8-2.6l-3.6-51.5c-0.1-0.8,0.2-1.5,0.8-2.1c0.5-0.6,1.3-0.9,2.1-0.9h50
				c0.8,0,1.5,0.3,2.1,0.9c0.5,0.6,0.8,1.3,0.8,2.1l-3.6,51.5C980.3,565.3,979,566.4,977.5,566.4z M937.3,560.8h37.6l3.2-45.9h-44
				L937.3,560.8z"/>
		</g>
		<g>
			<path class="st6" d="M981.1,553.6c-1.6,0-2.8-1.3-2.8-2.8c0-1.6,1.3-2.8,2.8-2.8c9.1,0,16.5-7.4,16.5-16.5s-7.4-16.5-16.5-16.5
				c-1.6,0-2.8-1.3-2.8-2.8c0-1.6,1.3-2.8,2.8-2.8c12.2,0,22.1,9.9,22.1,22.1C1003.3,543.6,993.3,553.6,981.1,553.6z"/>
		</g>
		<path class="trait1" d="M941,505c0,0-8-13,0-23s0-22,0-21"/>
		<path class="trait2" d="M959.5,490c0,0-3.8-14.8,6.8-22c10.6-7.2,6.5-21,6.2-20.1"/>
		<path class="trait3" d="M950.5,459c0,0-3.8-14.8,6.8-22c10.6-7.2,6.5-21,6.2-20.1"/>
	</g>
	<g id="posepapier">
		<g>
			<rect x="1145.9" y="503.4" class="st3" width="113.6" height="20.9"/>
		</g>
		<g>
			<rect x="1145.9" y="533.1" class="st3" width="113.6" height="20.9"/>
		</g>
		<g>
			<path class="st6" d="M1145.9,558.4c-1.4,0-2.5-2-2.5-4.4v-20.9c0-2.4,1.1-4.4,2.5-4.4s2.5,2,2.5,4.4V554
				C1148.4,556.4,1147.3,558.4,1145.9,558.4z"/>
		</g>
		<g>
			<path class="st6" d="M1150.9,567.2c-1.4,0-2.5-2-2.5-4.4V554c0-2.4,1.1-4.4,2.5-4.4s2.5,2,2.5,4.4v8.8
				C1153.4,565.2,1152.2,567.2,1150.9,567.2z"/>
		</g>
		<g>
			<g>
				<path class="st6" d="M1259.5,558.4h-113.6c-1.4,0-2.5-2-2.5-4.4c0-2.4,1.1-4.4,2.5-4.4h113.6c1.4,0,2.5,2,2.5,4.4
					C1262,556.4,1260.9,558.4,1259.5,558.4z"/>
			</g>
			<g>
				<path class="st6" d="M1259.5,558.4c-1.4,0-2.5-2-2.5-4.4v-20.9c0-2.4,1.1-4.4,2.5-4.4c1.4,0,2.5,2,2.5,4.4V554
					C1262,556.4,1260.9,558.4,1259.5,558.4z"/>
			</g>
			<g>
				<path class="st6" d="M1254.5,567.2c-1.4,0-2.5-2-2.5-4.4V554c0-2.4,1.1-4.4,2.5-4.4c1.4,0,2.5,2,2.5,4.4v8.8
					C1257,565.2,1255.9,567.2,1254.5,567.2z"/>
			</g>
		</g>
		<g>
			<g>
				<path class="st6" d="M1145.9,528.7c-1.4,0-2.5-2-2.5-4.4v-20.9c0-2.4,1.1-4.4,2.5-4.4s2.5,2,2.5,4.4v20.9
					C1148.4,526.7,1147.3,528.7,1145.9,528.7z"/>
			</g>
			<g>
				<path class="st6" d="M1259.5,528.7h-113.6c-1.4,0-2.5-2-2.5-4.4c0-2.4,1.1-4.4,2.5-4.4h113.6c1.4,0,2.5,2,2.5,4.4
					C1262,526.7,1260.9,528.7,1259.5,528.7z"/>
			</g>
			<g>
				<path class="st6" d="M1259.5,528.7c-1.4,0-2.5-2-2.5-4.4v-20.9c0-2.4,1.1-4.4,2.5-4.4c1.4,0,2.5,2,2.5,4.4v20.9
					C1262,526.7,1260.9,528.7,1259.5,528.7z"/>
			</g>
			<g>
				<path class="st6" d="M1150.9,537.5c-1.4,0-2.5-2-2.5-4.4v-8.8c0-2.4,1.1-4.4,2.5-4.4s2.5,2,2.5,4.4v8.8
					C1153.4,535.5,1152.2,537.5,1150.9,537.5z"/>
			</g>
			<g>
				<path class="st6" d="M1254.5,537.5c-1.4,0-2.5-2-2.5-4.4v-8.8c0-2.4,1.1-4.4,2.5-4.4c1.4,0,2.5,2,2.5,4.4v8.8
					C1257,535.5,1255.9,537.5,1254.5,537.5z"/>
			</g>
		</g>
		<g>
			<path class="st1" d="M1253.4,518.3H1152c-1.4,0-2.5-2-2.5-4.4c0-2.4,1.1-4.4,2.5-4.4h101.4c1.4,0,2.5,2,2.5,4.4
				C1255.9,516.3,1254.8,518.3,1253.4,518.3z"/>
		</g>
		<g>
			<path class="st1" d="M1253.4,548H1152c-1.4,0-2.5-2-2.5-4.4c0-2.4,1.1-4.4,2.5-4.4h101.4c1.4,0,2.5,2,2.5,4.4
				C1255.9,546,1254.8,548,1253.4,548z"/>
		</g>
	</g>
</g>
<g id="decor_mural">
	<g id="calendrier">
		<g>
			<rect x="926.6" y="286.6" class="st1" width="136.7" height="104.4"/>
		</g>
		<g>
			<g>
				<path class="st6" d="M954.6,318.8h-16.2c-1.2,0-2.2-1-2.2-2.2v-16.2c0-1.2,1-2.2,2.2-2.2h16.2c1.2,0,2.2,1,2.2,2.2v16.2
					C956.7,317.8,955.8,318.8,954.6,318.8z M940.6,314.4h11.8v-11.8h-11.8V314.4z"/>
			</g>
			<g>
				<path class="st6" d="M954.6,334.9h-16.2c-1.2,0-2.2-1-2.2-2.2v-16.1c0-1.2,1-2.2,2.2-2.2h16.2c1.2,0,2.2,1,2.2,2.2v16.1
					C956.7,333.9,955.8,334.9,954.6,334.9z M940.6,330.6h11.8v-11.8h-11.8V330.6z"/>
			</g>
			<g>
				<path class="st6" d="M954.6,351.1h-16.2c-1.2,0-2.2-1-2.2-2.2v-16.2c0-1.2,1-2.2,2.2-2.2h16.2c1.2,0,2.2,1,2.2,2.2v16.2
					C956.7,350.1,955.8,351.1,954.6,351.1z M940.6,346.8h11.8v-11.9h-11.8V346.8z"/>
			</g>
			<g>
				<path class="st6" d="M954.6,367.2h-16.2c-1.2,0-2.2-1-2.2-2.2v-16.1c0-1.2,1-2.2,2.2-2.2h16.2c1.2,0,2.2,1,2.2,2.2V365
					C956.7,366.2,955.8,367.2,954.6,367.2z M940.6,362.9h11.8v-11.8h-11.8V362.9z"/>
			</g>
			<g>
				<path class="st6" d="M954.6,383.4h-16.2c-1.2,0-2.2-1-2.2-2.2V365c0-1.2,1-2.2,2.2-2.2h16.2c1.2,0,2.2,1,2.2,2.2v16.2
					C956.7,382.4,955.8,383.4,954.6,383.4z M940.6,379.1h11.8v-11.8h-11.8V379.1z"/>
			</g>
			<g>
				<path class="st6" d="M970.7,318.8h-16.1c-1.2,0-2.2-1-2.2-2.2v-16.2c0-1.2,1-2.2,2.2-2.2h16.1c1.2,0,2.2,1,2.2,2.2v16.2
					C972.9,317.8,971.9,318.8,970.7,318.8z M956.7,314.4h11.8v-11.8h-11.8V314.4z"/>
			</g>
			<g>
				<path class="st6" d="M986.9,318.8h-16.2c-1.2,0-2.2-1-2.2-2.2v-16.2c0-1.2,1-2.2,2.2-2.2h16.2c1.2,0,2.2,1,2.2,2.2v16.2
					C989,317.8,988.1,318.8,986.9,318.8z M972.9,314.4h11.8v-11.8h-11.8V314.4z"/>
			</g>
			<g>
				<path class="st6" d="M1003.1,318.8h-16.2c-1.2,0-2.2-1-2.2-2.2v-16.2c0-1.2,1-2.2,2.2-2.2h16.2c1.2,0,2.2,1,2.2,2.2v16.2
					C1005.2,317.8,1004.2,318.8,1003.1,318.8z M989,314.4h11.8v-11.8H989V314.4z"/>
			</g>
			<g>
				<path class="st6" d="M1019.2,318.8h-16.1c-1.2,0-2.2-1-2.2-2.2v-16.2c0-1.2,1-2.2,2.2-2.2h16.1c1.2,0,2.2,1,2.2,2.2v16.2
					C1021.4,317.8,1020.4,318.8,1019.2,318.8z M1005.2,314.4h11.8v-11.8h-11.8V314.4z"/>
			</g>
			<g>
				<path class="st6" d="M1035.4,318.8h-16.2c-1.2,0-2.2-1-2.2-2.2v-16.2c0-1.2,1-2.2,2.2-2.2h16.2c1.2,0,2.2,1,2.2,2.2v16.2
					C1037.5,317.8,1036.6,318.8,1035.4,318.8z M1021.4,314.4h11.8v-11.8h-11.8V314.4z"/>
			</g>
			<g>
				<path class="st6" d="M1051.5,318.8h-16.1c-1.2,0-2.2-1-2.2-2.2v-16.2c0-1.2,1-2.2,2.2-2.2h16.1c1.2,0,2.2,1,2.2,2.2v16.2
					C1053.7,317.8,1052.7,318.8,1051.5,318.8z M1037.5,314.4h11.8v-11.8h-11.8V314.4z"/>
			</g>
			<g>
				<path class="st6" d="M1051.5,334.9h-16.1c-1.2,0-2.2-1-2.2-2.2v-16.1c0-1.2,1-2.2,2.2-2.2h16.1c1.2,0,2.2,1,2.2,2.2v16.1
					C1053.7,333.9,1052.7,334.9,1051.5,334.9z M1037.5,330.6h11.8v-11.8h-11.8V330.6z"/>
			</g>
			<g>
				<path class="st6" d="M1019.2,334.9h-16.1c-1.2,0-2.2-1-2.2-2.2v-16.1c0-1.2,1-2.2,2.2-2.2h16.1c1.2,0,2.2,1,2.2,2.2v16.1
					C1021.4,333.9,1020.4,334.9,1019.2,334.9z M1005.2,330.6h11.8v-11.8h-11.8V330.6z"/>
			</g>
			<g>
				<path class="st6" d="M1003.1,334.9h-16.2c-1.2,0-2.2-1-2.2-2.2v-16.1c0-1.2,1-2.2,2.2-2.2h16.2c1.2,0,2.2,1,2.2,2.2v16.1
					C1005.2,333.9,1004.2,334.9,1003.1,334.9z M989,330.6h11.8v-11.8H989V330.6z"/>
			</g>
			<g>
				<path class="st6" d="M970.7,334.9h-16.1c-1.2,0-2.2-1-2.2-2.2v-16.1c0-1.2,1-2.2,2.2-2.2h16.1c1.2,0,2.2,1,2.2,2.2v16.1
					C972.9,333.9,971.9,334.9,970.7,334.9z M956.7,330.6h11.8v-11.8h-11.8V330.6z"/>
			</g>
			<g>
				<path class="st6" d="M1051.5,351.1h-16.1c-1.2,0-2.2-1-2.2-2.2v-16.2c0-1.2,1-2.2,2.2-2.2h16.1c1.2,0,2.2,1,2.2,2.2v16.2
					C1053.7,350.1,1052.7,351.1,1051.5,351.1z M1037.5,346.8h11.8v-11.9h-11.8V346.8z"/>
			</g>
			<g>
				<path class="st6" d="M1051.5,367.2h-16.1c-1.2,0-2.2-1-2.2-2.2v-16.1c0-1.2,1-2.2,2.2-2.2h16.1c1.2,0,2.2,1,2.2,2.2V365
					C1053.7,366.2,1052.7,367.2,1051.5,367.2z M1037.5,362.9h11.8v-11.8h-11.8V362.9z"/>
			</g>
			<g>
				<path class="st6" d="M970.7,367.2h-16.1c-1.2,0-2.2-1-2.2-2.2v-16.1c0-1.2,1-2.2,2.2-2.2h16.1c1.2,0,2.2,1,2.2,2.2V365
					C972.9,366.2,971.9,367.2,970.7,367.2z M956.7,362.9h11.8v-11.8h-11.8V362.9z"/>
			</g>
			<g>
				<path class="st6" d="M970.7,383.4h-16.1c-1.2,0-2.2-1-2.2-2.2V365c0-1.2,1-2.2,2.2-2.2h16.1c1.2,0,2.2,1,2.2,2.2v16.2
					C972.9,382.4,971.9,383.4,970.7,383.4z M956.7,379.1h11.8v-11.8h-11.8V379.1z"/>
			</g>
			<g>
				<path class="st6" d="M986.9,383.4h-16.2c-1.2,0-2.2-1-2.2-2.2V365c0-1.2,1-2.2,2.2-2.2h16.2c1.2,0,2.2,1,2.2,2.2v16.2
					C989,382.4,988.1,383.4,986.9,383.4z M972.9,379.1h11.8v-11.8h-11.8V379.1z"/>
			</g>
			<g>
				<path class="st6" d="M1003.1,383.4h-16.2c-1.2,0-2.2-1-2.2-2.2V365c0-1.2,1-2.2,2.2-2.2h16.2c1.2,0,2.2,1,2.2,2.2v16.2
					C1005.2,382.4,1004.2,383.4,1003.1,383.4z M989,379.1h11.8v-11.8H989V379.1z"/>
			</g>
			<g>
				<path class="st6" d="M1019.2,367.2h-16.1c-1.2,0-2.2-1-2.2-2.2v-16.1c0-1.2,1-2.2,2.2-2.2h16.1c1.2,0,2.2,1,2.2,2.2V365
					C1021.4,366.2,1020.4,367.2,1019.2,367.2z M1005.2,362.9h11.8v-11.8h-11.8V362.9z"/>
			</g>
			<g>
				<path class="st6" d="M1003.1,367.2h-16.2c-1.2,0-2.2-1-2.2-2.2v-16.1c0-1.2,1-2.2,2.2-2.2h16.2c1.2,0,2.2,1,2.2,2.2V365
					C1005.2,366.2,1004.2,367.2,1003.1,367.2z M989,362.9h11.8v-11.8H989V362.9z"/>
			</g>
			<g>
				<path class="st6" d="M970.7,351.1h-16.1c-1.2,0-2.2-1-2.2-2.2v-16.2c0-1.2,1-2.2,2.2-2.2h16.1c1.2,0,2.2,1,2.2,2.2v16.2
					C972.9,350.1,971.9,351.1,970.7,351.1z M956.7,346.8h11.8v-11.9h-11.8V346.8z"/>
			</g>
			<g>
				<path class="st6" d="M1035.4,334.9h-16.2c-1.2,0-2.2-1-2.2-2.2v-16.1c0-1.2,1-2.2,2.2-2.2h16.2c1.2,0,2.2,1,2.2,2.2v16.1
					C1037.5,333.9,1036.6,334.9,1035.4,334.9z M1021.4,330.6h11.8v-11.8h-11.8V330.6z"/>
			</g>
			<g>
				<path class="st6" d="M1035.4,351.1h-16.2c-1.2,0-2.2-1-2.2-2.2v-16.2c0-1.2,1-2.2,2.2-2.2h16.2c1.2,0,2.2,1,2.2,2.2v16.2
					C1037.5,350.1,1036.6,351.1,1035.4,351.1z M1021.4,346.8h11.8v-11.9h-11.8V346.8z"/>
			</g>
			<g>
				<path class="st6" d="M1035.4,367.2h-16.2c-1.2,0-2.2-1-2.2-2.2v-16.1c0-1.2,1-2.2,2.2-2.2h16.2c1.2,0,2.2,1,2.2,2.2V365
					C1037.5,366.2,1036.6,367.2,1035.4,367.2z M1021.4,362.9h11.8v-11.8h-11.8V362.9z"/>
			</g>
			<g>
				<path class="st6" d="M1019.2,351.1h-16.1c-1.2,0-2.2-1-2.2-2.2v-16.2c0-1.2,1-2.2,2.2-2.2h16.1c1.2,0,2.2,1,2.2,2.2v16.2
					C1021.4,350.1,1020.4,351.1,1019.2,351.1z M1005.2,346.8h11.8v-11.9h-11.8V346.8z"/>
			</g>
			<g>
				<path class="st6" d="M1003.1,351.1h-16.2c-1.2,0-2.2-1-2.2-2.2v-16.2c0-1.2,1-2.2,2.2-2.2h16.2c1.2,0,2.2,1,2.2,2.2v16.2
					C1005.2,350.1,1004.2,351.1,1003.1,351.1z M989,346.8h11.8v-11.9H989V346.8z"/>
			</g>
			<g>
				<path class="st6" d="M986.9,334.9h-16.2c-1.2,0-2.2-1-2.2-2.2v-16.1c0-1.2,1-2.2,2.2-2.2h16.2c1.2,0,2.2,1,2.2,2.2v16.1
					C989,333.9,988.1,334.9,986.9,334.9z M972.9,330.6h11.8v-11.8h-11.8V330.6z"/>
			</g>
			<g>
				<path class="st6" d="M986.9,351.1h-16.2c-1.2,0-2.2-1-2.2-2.2v-16.2c0-1.2,1-2.2,2.2-2.2h16.2c1.2,0,2.2,1,2.2,2.2v16.2
					C989,350.1,988.1,351.1,986.9,351.1z M972.9,346.8h11.8v-11.9h-11.8V346.8z"/>
			</g>
			<g>
				<path class="st6" d="M986.9,367.2h-16.2c-1.2,0-2.2-1-2.2-2.2v-16.1c0-1.2,1-2.2,2.2-2.2h16.2c1.2,0,2.2,1,2.2,2.2V365
					C989,366.2,988.1,367.2,986.9,367.2z M972.9,362.9h11.8v-11.8h-11.8V362.9z"/>
			</g>
		</g>
		<g>
			<rect x="926.6" y="270" class="st9" width="136.7" height="18.6"/>
		</g>
		<g>
			<path class="st6" d="M1063.3,393.2H926.6c-1.2,0-2.2-1-2.2-2.2V268c0-1.2,1-2.2,2.2-2.2h136.7c1.2,0,2.2,1,2.2,2.2v123
				C1065.5,392.2,1064.5,393.2,1063.3,393.2z M928.8,388.9h132.4V270.2H928.8V388.9z"/>
		</g>
	</g>
	<g id="affichage">
		<g>
			<rect x="1101.3" y="186.5" class="st1" width="153" height="206.5"/>
			<path class="st2" d="M1254.3,395.2h-153c-1.2,0-2.2-1-2.2-2.2V186.5c0-1.2,1-2.2,2.2-2.2h153c1.2,0,2.2,1,2.2,2.2V393
				C1256.5,394.2,1255.5,395.2,1254.3,395.2z M1103.4,390.9h148.7V188.7h-148.7V390.9z"/>
		</g>
		<g>
			<path class="st6" d="M1254.3,395.2h-153c-1.2,0-2.2-1-2.2-2.2V186.5c0-1.2,1-2.2,2.2-2.2h153c1.2,0,2.2,1,2.2,2.2V393
				C1256.5,394.2,1255.5,395.2,1254.3,395.2z M1103.4,390.9h148.7V188.7h-148.7V390.9z"/>
		</g>
		<g>
			<path class="st9" d="M1196,320.5l-15.2,15.3c-3.5-1-7.2-1.6-11-1.6c-10.9,0-20.8,4.4-27.9,11.6c-7.1,7.2-17,11.6-27.9,11.6v-62.2
				l23.4-23.3l18.4,18.4h10.2L1196,320.5z"/>
		</g>
		<g>
			<path class="st8" d="M1241.8,295.2v62.2h-16.3c-10.9,0-20.8-4.4-27.9-11.6c-4.6-4.7-10.4-8.2-16.9-10l15.2-15.3l15.3-15.3h9
				l10-10.1H1241.8z"/>
		</g>
		<g>
			<path class="st10" d="M1225.6,357.4h-23.2c-10.9,0-20.8,4.4-27.9,11.6s-17,11.6-27.9,11.6h-32.7v-23.2c10.9,0,20.8-4.4,27.9-11.6
				c7.1-7.2,17-11.6,27.9-11.6c3.8,0,7.5,0.5,11,1.6c6.5,1.9,12.3,5.3,16.9,10C1204.8,352.9,1214.6,357.4,1225.6,357.4z"/>
		</g>
		<g>
			<path class="st7" d="M1241.8,357.4v23.2h-95.4c10.9,0,20.8-4.4,27.9-11.6s17-11.6,27.9-11.6H1241.8z"/>
		</g>
		<g>
			<polygon class="st7" points="1241.8,199 1241.8,295.2 1230.3,295.2 1220.2,305.2 1211.2,305.2 1196,320.5 1165.7,290.2 
				1155.5,290.2 1137.1,271.8 1113.8,295.2 1113.8,199 			"/>
		</g>
		<g>
			<circle class="st1" cx="1199.9" cy="264.6" r="13.7"/>
		</g>
	</g>
	<g id="plafond">
		<g>
			<g>
				<polygon class="st7" points="1007,180.7 950.7,180.7 957.1,137.3 1000.6,137.3 				"/>
			</g>
			<g>
				<path class="st6" d="M978.9,139.5c-1.2,0-2.2-1-2.2-2.2V2.2c0-1.2,1-2.2,2.2-2.2c1.2,0,2.2,1,2.2,2.2v135.1
					C981,138.5,980.1,139.5,978.9,139.5z"/>
			</g>
			<g>
				<path class="st6" d="M1007,182.9h-56.4c-0.6,0-1.2-0.3-1.6-0.7c-0.4-0.5-0.6-1.1-0.5-1.7L955,137c0.2-1.1,1.1-1.8,2.1-1.8h43.4
					c1.1,0,2,0.8,2.1,1.8l6.5,43.4c0.1,0.6-0.1,1.3-0.5,1.7C1008.3,182.6,1007.7,182.9,1007,182.9z M953.2,178.6h51.4l-5.8-39.1H959
					L953.2,178.6z"/>
			</g>
			<g>
				<path class="st6" d="M983.6,139.5h-9.6c-1.2,0-2.2-1-2.2-2.2c0-3.8,3.1-6.9,6.9-6.9s6.9,3.1,6.9,6.9
					C985.8,138.5,984.8,139.5,983.6,139.5z M977.4,135.1h3C979.5,134.5,978.2,134.5,977.4,135.1z"/>
			</g>
		</g>
		<g>
			<g>
				<polygon class="st8" points="1039.3,107.4 996.9,107.4 1001.8,74.8 1034.4,74.8 				"/>
			</g>
			<g>
				<path class="st6" d="M1039.3,109.5h-42.4c-0.6,0-1.2-0.3-1.6-0.7c-0.4-0.5-0.6-1.1-0.5-1.7l4.9-32.6c0.2-1.1,1.1-1.8,2.1-1.8
					h32.6c1.1,0,2,0.8,2.1,1.8l4.9,32.6c0.1,0.6-0.1,1.3-0.5,1.7C1040.5,109.3,1039.9,109.5,1039.3,109.5z M999.4,105.2h37.3
					l-4.2-28.3h-28.9L999.4,105.2z"/>
			</g>
			<g>
				<path class="st6" d="M1018.1,76.9c-1.2,0-2.2-1-2.2-2.2V2.2c0-1.2,1-2.2,2.2-2.2c1.2,0,2.2,1,2.2,2.2v72.6
					C1020.3,76,1019.3,76.9,1018.1,76.9z"/>
			</g>
			<g>
				<path class="st6" d="M1022.9,76.9h-9.6c-1.2,0-2.2-1-2.2-2.2c0-3.8,3.1-6.9,6.9-6.9c3.8,0,6.9,3.1,6.9,6.9
					C1025,76,1024.1,76.9,1022.9,76.9z M1016.6,72.6h3C1018.7,72,1017.4,72,1016.6,72.6z"/>
			</g>
		</g>
	</g>
	<g id="etagere">
		<g>
			<path class="st2" d="M879.6,199.1H474.4c-1.9,0-3.5-1.5-3.5-3.5v-16.4c0-1.9,1.5-3.5,3.5-3.5h405.2c1.9,0,3.5,1.5,3.5,3.5v16.4
				C883.1,197.6,881.5,199.1,879.6,199.1z M477.8,192.2h398.3v-9.5H477.8V192.2z"/>
		</g>
		<g>
			<path class="st6" d="M490.8,215.6c-1.9,0-3.5-1.5-3.5-3.5v-16.4c0-1.9,1.5-3.5,3.5-3.5c1.9,0,3.5,1.5,3.5,3.5v16.4
				C494.3,214,492.7,215.6,490.8,215.6z"/>
		</g>
		<g>
			<path class="st6" d="M863.2,215.6c-1.9,0-3.5-1.5-3.5-3.5v-16.4c0-1.9,1.5-3.5,3.5-3.5c1.9,0,3.5,1.5,3.5,3.5v16.4
				C866.6,214,865.1,215.6,863.2,215.6z"/>
		</g>
		<g>
			<rect x="474.4" y="179.2" class="st12" width="405.2" height="16.4"/>
			<path class="st6" d="M879.6,199.1H474.4c-1.9,0-3.5-1.5-3.5-3.5v-16.4c0-1.9,1.5-3.5,3.5-3.5h405.2c1.9,0,3.5,1.5,3.5,3.5v16.4
				C883.1,197.6,881.5,199.1,879.6,199.1z M477.8,192.2h398.3v-9.5H477.8V192.2z"/>
		</g>
	</g>
	<g id="bonsai">
		<g>
			<path class="st13" d="M775.8,156c-1.9,0-3.5-1.5-3.5-3.5c0-12.8,10.4-23.1,23.1-23.1c1.9,0,3.5,1.5,3.5,3.5
				c0,1.9-1.5,3.5-3.5,3.5c-9,0-16.2,7.3-16.2,16.2C779.3,154.5,777.7,156,775.8,156z"/>
		</g>
		<g>
			<path class="st13" d="M795.5,136.4c-1.9,0-3.5-1.5-3.5-3.5c0-1.9,1.5-3.5,3.5-3.5c9,0,16.2-7.3,16.2-16.2c0-1.9,1.5-3.5,3.5-3.5
				c1.9,0,3.5,1.5,3.5,3.5C818.6,126,808.3,136.4,795.5,136.4z"/>
		</g>
		<g>
			<rect x="739.2" y="152.6" class="st1" width="113.4" height="20.5"/>
			<path class="st6" d="M852.7,176.5H739.2c-1.9,0-3.5-1.5-3.5-3.5v-20.5c0-1.9,1.5-3.5,3.5-3.5h113.4c1.9,0,3.5,1.5,3.5,3.5v20.5
				C856.1,175,854.6,176.5,852.7,176.5z M742.7,169.6h106.5V156H742.7V169.6z"/>
		</g>
		<g>
			<path class="st10" d="M840.9,105.5c0,4.2-3.4,7.7-7.7,7.7H763c-4.3,0-7.7-3.5-7.7-7.7c0-4.3,3.4-7.7,7.7-7.7h26.4
				c-4.3,0-7.7-3.5-7.7-7.7c0-4.3,3.4-7.7,7.7-7.7h28.5c4.3,0,7.7,3.5,7.7,7.7c0,4.2-3.4,7.7-7.7,7.7h15.4
				C837.5,97.9,840.9,101.3,840.9,105.5z"/>
			<path class="st10" d="M833.2,116.7H763c-6.1,0-11.1-5-11.1-11.1c0-6.1,5-11.1,11.1-11.1h16.1c-0.5-1.3-0.8-2.7-0.8-4.2
				c0-6.2,5-11.2,11.1-11.2h28.5c6.1,0,11.1,5,11.1,11.2c0,1.5-0.3,2.9-0.8,4.2h5c6.1,0,11.1,5,11.1,11.1
				C844.4,111.7,839.4,116.7,833.2,116.7z M763,101.3c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2h70.2c2.3,0,4.2-1.9,4.2-4.2
				s-1.9-4.2-4.2-4.2h-15.4c-1.9,0-3.5-1.5-3.5-3.5c0-1.9,1.5-3.5,3.5-3.5c2.3,0,4.2-1.9,4.2-4.2c0-2.3-1.9-4.3-4.2-4.3h-28.5
				c-2.3,0-4.2,1.9-4.2,4.3c0,2.3,1.9,4.2,4.2,4.2c1.9,0,3.5,1.5,3.5,3.5c0,1.9-1.5,3.5-3.5,3.5H763z"/>
		</g>
		<g>
			<path class="st10" d="M817.9,101.3h-28.5c-1.9,0-3.5-1.5-3.5-3.5c0-1.9,1.5-3.5,3.5-3.5h28.5c1.9,0,3.5,1.5,3.5,3.5
				C821.3,99.8,819.8,101.3,817.9,101.3z"/>
		</g>
	</g>
	<rect x="531.1" y="160.9" class="st6" width="146.5" height="10.7"/>
	<g>
		<path class="st6" d="M665.4,161c-1.9,0-3.5-1.5-3.5-3.5V59.9H546.8v97.7c0,1.9-1.5,3.5-3.5,3.5s-3.5-1.5-3.5-3.5V56.5
			c0-1.9,1.5-3.5,3.5-3.5h122c1.9,0,3.5,1.5,3.5,3.5v101.1C668.8,159.5,667.3,161,665.4,161z"/>
	</g>
	<g>
		<path class="st6" d="M678.7,178.3H530.1c-1.9,0-3.5-1.5-3.5-3.5v-17.3c0-1.9,1.5-3.5,3.5-3.5h148.6c1.9,0,3.5,1.5,3.5,3.5v17.3
			C682.1,176.8,680.6,178.3,678.7,178.3z M533.5,171.4h141.7V161H533.5V171.4z"/>
	</g>
	<g id="pendulegauche">
		<line class="st14" x1="573" y1="57" x2="573" y2="129"/>
		<g>
			<circle class="st3" cx="573.2" cy="129.1" r="10.4"/>
		</g>
	</g>
	<g>
		<line class="st14" x1="594" y1="57" x2="594" y2="129"/>
		<g>
			<circle class="st3" cx="594" cy="129.1" r="10.4"/>
		</g>
	</g>
	<g>
		<line class="st14" x1="615" y1="57" x2="615" y2="129"/>
		<g>
			<circle class="st3" cx="614.8" cy="129.1" r="10.4"/>
		</g>
	</g>
	<g id="penduledroite">
		<line class="st14" x1="636" y1="57" x2="636" y2="129"/>
		<g>
			<circle class="st3" cx="635.8" cy="129.1" r="10.4"/>
		</g>
	</g>
	<g id="horloge_carrée">
		<g>
			<path class="st6" d="M352.8,257.1H174.3c-2.1,0-3.8-1.7-3.8-3.8V74.8c0-2.1,1.7-3.8,3.8-3.8h178.5c2.1,0,3.8,1.7,3.8,3.8v178.5
				C356.6,255.4,354.9,257.1,352.8,257.1z M178.1,249.5H349V78.6H178.1V249.5z"/>
		</g>
		<line id="minute" class="st14" x1="264" y1="167" x2="264" y2="97"/>
		<line id="heure" class="st14" x1="264" y1="167" x2="264" y2="132"/>
		<line id="seconde" class="st15" x1="263.5" y1="167.5" x2="263.5" y2="101.5"/>
	</g>
	<g id="mmi">
		<path class="m1" d="M542.6,424.8h-19.4L539,298.6l38,63.8l20.3,34.2l-11.2,18.6l-16.5-27.5l-18.4-31.3L542.6,424.8z
			 M601.1,390.5L590,371.8l44-73.1l15.5,126.1H630l-8.3-68.5l-19.1,31.5L601.1,390.5z"/>
		<path class="m2" d="M686,424.8h-19.4l15.8-126.1l38,63.8l20.3,34.2l-11.2,18.6L713,387.8l-18.4-31.3L686,424.8z M744.5,390.5
			l-11.2-18.8l44-73.1l15.5,126.1h-19.4l-8.3-68.5L746,387.8L744.5,390.5z"/>
		<path class="i" d="M809.8,298.6H831v126.1h-21.2V298.6z"/>
	</g>
</g>
</svg>
</div>



		






<!-- Fin code header -->
