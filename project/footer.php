</div>
</div>
</div></p>
</p>

</section></div>
<br>


<br>
<br>
<br>
</head>

<p>
    <img src="images\pic1.png"width="700" height="500">
    <a href="http://www.facebook.com">
        <img src="images\facebook.png"width="60" height="50"/>
    </a>
    <a href="http://www.twitter.com">
        <img src="images\twitter.png"width="60" height="50"/>
    </a>
    <a href="http://www.instgram.com"><img src="images\instagram.png"width="60" height="50"/>
    </a>
    <a href="http://www.google.com"><img src="images\google-plus.png"width="60" height="60"/>
    </a>
</p>


<br>
<br>
<br>
<br>


<?php
// events
include ('eventDetails.php');

?>

<?php
$x=time();
$t=mktime(0,0,0,26,9,2019);
$coundown=round(($t-$x)/86400);
echo "$coundown days until the wedding";

?>


<br>
<div id="maps"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3383.1540744310164!2d34.73958098511887!3d32.01093988121015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1502b305cd594c41%3A0x5cd14af7c323600e!2z15PXqNeaINeR158g15LXldeo15nXldefIDEzNiwg15HXqiDXmded!5e0!3m2!1siw!2sil!4v1554670340107!5m2!1siw!2sil" width="450" height="250" frameborder="0" style="border:0" allowfullscreen></iframe></div>
<br>

<div class="shattle col-md-11">

    <div id="text"><h2>שעות ומיקום הסעות <i class="fas fa-bus"></i></h2>
        <table class="table table-secondary">
            <?php
                $table = [["name"=>"נהג ויצמן","hour"=>"18:30","place"=>"באר שבע-האוניברסיטה","number"=>"1"],
                    ["name"=>"נהג-מנחם","hour"=>"19:00","place"=>"תל אביב-כיכר רבין","number"=>"2"]];
            ?>
            <thead>
            <tr>
                <th scope="col">שעות</th>
                <th scope="col">כתובת</th>
                <th scope="col">שם</th>
                <th scope="col">מספר השאטל</th>
            </tr>
            </thead>
            <tbody>
            <?php
                foreach($table as $row){?>
                <tr>
                    <td><?php echo $row['hour']; ?></td>
                    <td><?php echo $row['place']; ?> </td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo$row['number']; ?></td>
                </tr>

              <?php
                }
            ?>
           <!-- <tr>
                <td>18:30</td>
                <td>באר שבע-האוניברסיטה</td>
                <td>נהג ויצמן</td>
                <th scope="row">1</th>
            </tr>
            <tr>
                <td>19:00</td>
                <td>ת"א-כיכר רבין</td>
                <td>נהג-מנחם</td>
                <th scope="row">2</th>
            </tr>-->
            </tbody>
        </table>

    </div></div>
</div>

</section>

</div>



<?php
//form
include ('rsvp.php');

?>


<footer>
    <p>Made by <a href="https://github.com/ChenMor28/Chen_Sapir">Chen Mor&Sapir Zalach [GIT]</a> all the rights received &copy; 2019 - <span id="contact-link">contact</span></p>
</footer>

<!-- Modal Area -->
<div class="modal-bg">
    <div class="modal-content">
        <div id="modal-close"><span id="close">+</span></div>

        <div class="row">
            <div class="col-6 modal-pic"><img src="images/chen&sapir.JPG" alt="Chen Mor & Sapir Zalach picture" class="img-thumbnail" id="author"></div>
            <div class="col-6 modal-text">
                <h1>Chen Mor & Sapir Zalach</h1>
                <p>Hi, for every question,problem you can always send me an email down bellow.
                </p>
                <a href="mailto:chenmor28@gmail.com?subject=Ashkelon Party
                                &body=Hi, I need to ask you a few questions.. - " class="btn btn-dark btn-lg" tabindex="-1" role="button" aria-disabled="true"><i class="far fa-envelope"></i> Direct Mail</a>
            </div>
        </div>

    </div>
</div>



<script src="index.js" async></script>


<script type="text/javascript" src="index1.js"></script>


<script>
    var slide_index = 1;
    displaySlides(slide_index);
    function nextSlide(n) {
        displaySlides(slide_index += n);
    }
    function currentSlide(n) {
        displaySlides(slide_index = n);
    }
    function displaySlides(n) {
        var i;
        var slides = document.getElementsByClassName("showSlide");
        if (n > slides.length) { slide_index = 1 }
        if (n < 1) { slide_index = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slide_index - 1].style.display = "block";
    }
</script>
</div></body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
</html>