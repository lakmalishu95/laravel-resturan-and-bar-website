<!DOCTYPE html>
<html lang="en">

@include('head')

<body>

    <!-- ***** Preloader End ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    
    </div>


    <!-- ***** Header Area Start ***** -->

    @include('navbar')<br>

    <div class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="left-text-content">
                    <div style="padding-bottom: 50px;" class="section-heading">
                        <h2>PARTNERS</h2>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nemo nostrum culpa dignissimos error harum iste quae. Optio labore quos, iure voluptatibus, maiores architecto tenetur eos repellendus sequi, natus vitae.</p>
                       <button type="button" class="btn btn-lg btn-danger"  title="Popover title" >Scot</button><br><br>
                       <button type="button" class="btn btn-lg btn-danger"  title="Popover title" >Jacob</button><br><br>
                       <button  type="button" class="btn btn-lg btn-danger"  title="Popover title" >Bleu</button><br><br>
                    </div>            
                </div>
            </div>
        </div>
    </div>
</div>


@include('footer')

</body>
</html>