<?php include('header.php');?>


<!-- jQuery & Nivo Slider -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="jquery.nivo.slider.pack.js"></script>

<script>
    $(window).load(function() {
        $('#slider').nivoSlider({
            directionNavHide: false,
            captionOpacity: 1,
            prevText: '<',
            nextText: '>'
        });
    });
</script>

<div class="slider-wrapper futurico-theme">
 
    <div id="slider" class="nivoSlider">
 
        <img src="http://i.imgur.com/nvbtF.png" title="#caption1">
 
        <img src="http://i.imgur.com/qq2Ot.png" alt="">
 
        <img src="http://i.imgur.com/nvbtF.png" alt="">
 
    </div>

<div id="caption1" class="nivo-html-caption">
    <strong>New Project</strong> <span></span> <em>Some description here</em>.
</div>
 
<div id="caption3" class="nivo-html-caption">
    <strong>Image 3</strong> <span></span> <em>Some description here</em>.
</div>

</div>

	<div class="contentwrap">
		<div class="contentwrap1">
			<div class="wrap1">
				<div class="fakeh">La calidad de nuestro trabajo</div>
				<div class="vermas">Ver más</div>
				<div class="wrap1more">El éxito de Ramírez & Asociados S.C. reside en la responsabilidad activa hacia la sociedad, como fundamento de su excelencia en el servicio. <P>
							Este compromiso se logra sometiendo cada proceso a las más estrictas normas de calidad.</div>
			</div>

			<div class="wrap2">
				<div class="fakeh">Nuestro compromiso con los clientes</div>
				<div class="vermas">Ver más</div>
				<div class="wrap2more">El éxito de Ramírez & Asociados S.C. reside en la responsabilidad activa hacia la sociedad, como fundamento de su excelencia en el servicio. <P>
							Este compromiso se logra sometiendo cada proceso a las más estrictas normas de calidad.</div>
			</div>
		</div>

		<div class="wrap3">
			<img src="http://www.freeiconsweb.com/Icons-show/Phuzion_Icons/Laptop.png" width="100px">
		</div>

	</div>



<?php include('footer.php');?>