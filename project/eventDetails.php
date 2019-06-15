
    <!--    <ul class="list-group">

            <li class="list-group-item list-group-item-dark text-center"> לוח זמנים :</li>
            <li class="list-group-item"><b>19:00-20:30</b> הגעה ובופה <i class="fas fa-chevron-left"></i></li>
            <li class="list-group-item"><b>20:30-21:00</b> חופה <i class="fas fa-chevron-left"></i></li>
            <li class="list-group-item"><b>21:30-22:30</b> מנה ראשונה <i class="fas fa-chevron-left"></i></li>
            <li class="list-group-item"><b>22:30</b> מסיבה <i class="fas fa-chevron-left"></i></li>
            </p></ul>
-->

        <div id="t3">
            <div class="col-lg-12 col-md-12 col-sm-12">
<ul class="list-group">
    <p style="text-align: center">
<li class="list-group-item list-group-item-dark text-center"> לוח זמנים :</li>
    <?php
    $data = ["<li class='list-group-item'><b>19:00-20:30</b> הגעה ובופה <i class='fas fa-chevron-left'></i></li>",
        "<li class='list-group-item'><b>20:30-21:00</b> חופה <i class='fas fa-chevron-left'></i></li>",
        "<li class='list-group-item'><b>21:30-22:30</b> מנה ראשונה <i class='fas fa-chevron-left'></i></li>",
        "<li class='list-group-item'><b>22:30</b> מסיבה  <i class='fas fa-chevron-left'></i></li>"];

    foreach($data as $li){
        echo $li;
    }

    ?>

    </p>
</ul>
    </div></div>