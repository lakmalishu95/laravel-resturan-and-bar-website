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
                        <div class="section-heading">
                            <h2>SERVICES</h2>
                            <hr>
                            <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or
                                double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page.
                                I’m a great place for you to tell a story and let your users know a little more about you.
                                This is a great space to write long text about your company and your services. You can use
                                this space to go into a little more detail about your company. Talk about your team and what
                                services you provide. Tell your visitors the story of how you came up with the idea for your
                                business and what makes you different from your competitors. Make your company stand out and
                                show your visitors who you are.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card">
                                    <img src="assets/images/03.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="assets/images/03.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="assets/images/03.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('footer')


</body>

</html>