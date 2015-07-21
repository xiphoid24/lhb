<!DOCTYPE html>
<html>
	<head>
		<title>Home | Lancaster Home Builders PA Home Construction</title>
		<?php include 'stubs/head.php'; ?>
	</head>
	<body class="">
		<div id="container" class="container">
			<?php include 'stubs/navbar.php'; ?>

            <ul class="visible-xs">
			    <li><a href="documents/AugustaBrochure.pdf">Augusta Brochure, 2582 sq ft</a></li>
                <li><a href="documents/CharlestonBrochure.pdf">Charleston Brochure, 2754 sq ft</a></li>
                <li><a href="documents/HampshireIIIBrochure.pdf">Hampshire III Brochure, 2016 sq</a></li>
                <li><a href="documents/MicheleBrochure1800.pdf">Michele Brochure, 1800 sq ft, 3 bedroom</a></li>
                <li><a href="documents/MicheleBrochure2230.pdf">Michele Brochure, 2230 sq ft, 4 bedroom</a></li>
                <li><a href="documents/MorganBrochure.pdf">Morgan Brochure, 2230 sq ft</a></li>
                <li><a href="documents/RockwellBrochure.pdf">Rockwell Brochure, 2444 sq ft</a></li>
                <li><a href="documents/RyleighBrochure.pdf">Ryleigh Brochure, 3292 sq ft</a></li>
                <li><a href="documents/TylerBrochure.pdf">Tyler Brochure, 1475 sq ft</a></li>
                <li><a href="documents/TylerIIBrochure.pdf">Tyler II Brochure, 1632 sq ft</a></li>
                <li><a href="documents/YorkshireBrochure.pdf">Yorkshire Brochure, 1700 sq ft</a></li>
            </ul>

            <div class="row hidden-xs">
                <div class="col-sm-3 margin-bottom">
                    <a id="brochure-1" data-title="Augusta Brochure" data-body="documents/AugustaBrochure.pdf" href="#"><img class="img-responsive" src="images/docIcons/Augusta.jpg" alt="" /></a>
                </div>
                <div class="col-sm-3 margin-bottom">
                    <a id="brochure-2" data-title="Charlston Brochure" data-body="documents/CharlestonBrochure.pdf" href="#"><img class="img-responsive" src="images/docIcons/Charleston.jpg" alt="" /></a>
                </div>
                <div class="col-sm-3 margin-bottom">
                    <a id="brochure-3" data-title="Hampshire III Brochure" data-body="documents/HampshireIIIBrochure.pdf" href="#"><img class="img-responsive" src="images/docIcons/HampshireIII.jpg" alt="" /></a>
                </div>
                <div class="col-sm-3 margin-bottom">
                    <a id="brochure-4" data-title="Michele Brochure, 3 bedroom" data-body="documents/MicheleBrochure1800.pdf" href="#"><img class="img-responsive" src="images/docIcons/Michele1800.jpg" alt="" /></a>
                </div>

                <div class="col-sm-3 margin-bottom">
                    <a id="brochure-5" data-title="Michele Brochure, 4 bedroom" data-body="documents/MicheleBrochure2230.pdf" href="#"><img class="img-responsive" src="images/docIcons/Michele2230.jpg" alt="" /></a>
                </div>
                <div class="col-sm-3 margin-bottom">
                    <a id="brochure-6" data-title="Morgan Brochure" data-body="documents/MorganBrochure.pdf" href="#"><img class="img-responsive" src="images/docIcons/Morgan.jpg" alt="" /></a>
                </div>
                <div class="col-sm-3 margin-bottom">
                    <a id="brochure-7" data-title="Rockwell Brochure" data-body="documents/RockwellBrochure.pdf" href="#"><img class="img-responsive" src="images/docIcons/Rockwell.jpg" alt="" /></a>
                </div>
                <div class="col-sm-3 margin-bottom">
                    <a id="brochure-8" data-title="Ryleigh Brochure" data-body="documents/RyleighBrochure.pdf" href="#"><img class="img-responsive" src="images/docIcons/Ryleigh.jpg" alt="" /></a>
                </div>

                <div class="col-sm-3">
                    <a id="brochure-9" data-title="Tyler Brochure" data-body="documents/TylerBrochure.pdf" href="#"><img class="img-responsive" src="images/docIcons/Tyler.jpg" alt="" /></a>
                </div>
                <div class="col-sm-3">
                    <a id="brochure-10" data-title="Tyler II Brochure" data-body="documents/TylerIIBrochure.pdf" href="#"><img class="img-responsive" src="images/docIcons/TylerII.jpg" alt="" /></a>
                </div>
                <div class="col-sm-3">
                    <a id="brochure-11" data-title="Yorkshire Brochure" data-body="documents/YorkshireBrochure.pdf" href="#"><img class="img-responsive" src="images/docIcons/Yorkshire.jpg" alt="" /></a>
                </div>
            </div>
            <div id="brochure-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="brochure-modal-title">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal" aria-label="close" type="button" name="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <span class="text-black text-center text-18" id="brochure-modal-title" data=""></span>
                        </div>
                        <div class="modal-body">
                            <object id="modal-body" data="" type="application/pdf" width="100%" height="500px">
                            </object>
                        </div>
                    </div>
                </div>
            </div>

			<?php include 'stubs/footer.php'; ?>
		</div>

		<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="js/nav.js" charset="utf-8"></script>
		<script type="text/javascript">
		var quotes = [
			'We recently moved into our beautiful new home built by Lancaster Home Builders.',
			'We appreciated the ability to make adjustments to the home as we saw the progression of the build.',
			'Our design selections and the construction of the final product look beautiful.',
			'While the process was a learning experience and had some expected bumps along the way, we were able to stay on schedule and budget with our builder, Lancaster Home Builders.'
		];
		</script>
		<script src="js/quote.js" charset="utf-8"></script>
        <script src="js/documentsModal.js" charset="utf-8"></script>
	</body>
</html>
