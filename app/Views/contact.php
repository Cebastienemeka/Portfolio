<?= $this->extend('default_view') ?>
<?= $this->section('content') ?>

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>CONTACT US</h2>
                <div class="page_link">
                    <a href="index.html">Home</a>
                    <a href="contact.html">CONTACT</a>
                </div>

            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Contact Area =================-->
<section class="contact_area p_120">
    <div class="container">
        <!-- <div id="mapBox" class="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="13" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-mlat="40.701083" data-mlon="-74.1522848">
        </div> -->
        <!-- <iframe src="https://www.google.com/maps/place/7+Oyebanji+St,+Ologolo,+Lekki+100001,+Lagos/@6.4309734,3.5172365,18z/data=!4m9!1m2!2m1!1sno+7,+oyebanji+street+ologolo!3m5!1s0x103bf666f1d575ed:0x370345627503ac8b!8m2!3d6.4309734!4d3.5172365!16s%2Fg%2F11vyqg1bgb" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
        <div id="mapBox" class="mapBox" data-lat="6.4309734" data-lon="3.5172365" data-zoom="15" data-info="7 Oyebanji St, Ologolo, Lekki 100001, Lagos">
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>Lagos, Nigeria</h6>
                        <p>Lekki Lagos</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="tel:(234) 8054522505">(234) 804522505</a></h6>
                        <p>Mon to Fri 9am to 6 pm</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="mailto:djotchou20@gmail.com">djotchou20@gmail.com</a></h6>
                        <p>Send us your message anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    function initMap() {
        var mapBox = document.getElementById('mapBox');
        var lat = parseFloat(mapBox.getAttribute('data-lat'));
        var lon = parseFloat(mapBox.getAttribute('data-lon'));
        var zoom = parseInt(mapBox.getAttribute('data-zoom'));
        var info = mapBox.getAttribute('data-info');

        var mapOptions = {
            center: {
                lat: lat,
                lng: lon
            },
            zoom: zoom,
        };

        var map = new google.maps.Map(mapBox, mapOptions);

        var marker = new google.maps.Marker({
            position: {
                lat: lat,
                lng: lon
            },
            map: map,
            title: info,
        });

        var infoWindow = new google.maps.InfoWindow({
            content: info,
        });

        marker.addListener('click', function() {
            infoWindow.open(map, marker);
        });
    }

    // Initialize the map when the window loads
    window.onload = initMap;
</script>


<?= $this->endSection() ?>