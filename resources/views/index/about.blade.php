@extends('layouts.app')

@section('content')


        <div class="container about-head">
            <h1 class="text-center animation-slideDown"><i class="fa fa-building-o"></i> <strong>Our Company</strong></h1>
            <h2 class="h3 text-center animation-slideUp"><strong>Built with love by passionate people!</strong></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="about-block">
                        <h3 class="about-block-title"><strong>When</strong> did all start?</h3>
                        <p>Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget!</p>
                    </div>
                    <div class="about-block">
                        <h3 class="about-block-title"><strong>Where</strong> did all start?</h3>
                        <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="about-block">
                        <h3 class="about-block-title"><strong>What</strong> will the future bring?</h3>
                        <p>Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget!</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="about-block">
                        <table class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th class="text-center">Year</th>
                                    <th class="text-center">Projects</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2014</td>
                                    <td><strong>10</strong></td>
                                </tr>
                                <tr>
                                    <td>2015</td>
                                    <td><strong>5</strong> &amp; Counting..</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="about-block">
                        <p class="text-center">
                            <img src="{{ asset('img/avatar.jpg') }}" alt="Avatar" class="img-circle">
                        </p>
                        <blockquote>
                            <p>I'm grateful we made it that far and continue strong! Thank you all for supporting us!</p>
                            <footer><strong>Tianxie</strong>, CEO</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        <div class="container about-head">
            <div class="text-center">
                <a href="#" class="btn btn-lg btn-primary">Let's work together!</a>
            </div>
        </div>

@stop