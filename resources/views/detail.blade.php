@extends('layout.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <h3>Nullam lobortis ut pulvinar pellentes leo a tristique rutrum</h3>

            <img style="margin-left:auto; margin-right:auto; display:block" src="images/more.jpg" alt="">

            <h4>Nulla aliquam nisi sed lorem rhoncus ut adipiscing leo semper. Vestibulum sit amet libero ante, a porta augue. Morbi ornare, leo a tristique rutrum, arcu nulla ornare purus, et pharetra tortor lectus at lectus. Cras congue rhoncus eros et facilisis. Maecenas vehicula pretium turpis, in volutpat mauris imperdiet vel. Nulla facilisi. Sed at justo sem.</h4>
            <p>Porttitor in imperdiet et, dignissim in metus. Etiam vitae lorem at felis porta auctor. Nullam semper pharetra gravida.

                Quisque arcu elit, condimentum eu convallis nec, mattis vitae elit. Aliquam eu justo eu ipsum ultricies rutrum non eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue porttitor ligula, in tempor ipsum sagittis ut. Suspendisse sit amet tortor urna, ut mattis massa. Curabitur eget elit leo. Integer mauris odio, semper quis aliquet id, mattis quis mauris. Proin consectetur vestibulum tellus eu tempor.

                Vestibulum sit amet libero vel neque dapibus ultrices. Sed sollicitudin est neque, ac dictum ipsum. Nullam lobortis, nisi ut pulvinar pellentesque, orci metus bibendum velit, et adipiscing felis sapien fermentum dui. Mauris vulputate lobortis hendrerit. Cras condimentum vulputate ante in imperdiet. Donec vitae massa orci. Fusce orci ligula, gravida vel tincidunt ut, pretium in dolor. Nulla in odio diam, eu malesuada nisl. Sed porta metus at est suscipit sagittis. Suspendisse elementum tortor sit amet lorem elementum ornare. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris venenatis, quam fringilla lobortis luctus

                Suspendisse at libero porttitor nisi aliquet vulputate vitae at velit. Aliquam eget arcu magna, vel congue dui. Nunc auctor mauris tempor leo aliquam vel porta ante sodales. Nulla facilisi. In accumsan mattis odio vel luctus.

                Aenean vehicula vehicula aliquam. Aliquam lobortis cursus erat, in dictum neque suscipit id. In eget ante massa. Mauris ut mauris vel libero sagittis congue. Aenean id turpis lectus. Duis eget consequat velit. Suspendisse cursus nulla vel eros blandit placerat. Aliquam volutpat justo sit amet dui sollicitudin eget interdum nibh gravida. Cras nec placerat libero. Cras id risus sem. Maecenas sit amet ligula turpis, malesuada convallis dui. Ut ligula lorem, vestibulum sit amet fringilla lobortis, posuere at odio.</p>

                <div class="card bg-light mb-3" style="max-width: 900px;">
                    <div style="font-size:12px" class="card-header">890 Views</div>
                    <div class="row g-0">
                        <div class="col-md-2 d-flex justify-content-center align-items-center">
                            <img style="max-width: 100%; height: auto;" src="images/user.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <p style="font-size:12px" class="card-text">Suspendisse at libero porttitor nisi aliquet vulputate vitae at velit. Aliquam eget arcu magna, vel congue dui. Nunc auctor mauris tempor leo aliquam vel porta ante sodales. Nulla facilisi. In accumsan mattis odio vel luctus.</p>
                                <p>Email <span style="color:red">@</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Latest from</h3>
                <ul>
                    <li style="list-style:none; font-weight: 100; font-size:13px"><a style="color: black;" href="/detailberita">Bioetd augue hasellus aliquam nulla sit a</a></li>
                    <li style="list-style:none; font-weight: 100; font-size:13px"><a style="color: black;" href="/detailberita">Bioetd augue hasellus aliquam nulla sit a</a></li>
                    <li style="list-style:none; font-weight: 100; font-size:13px"><a style="color: black;" href="/detailberita">Bioetd augue hasellus aliquam nulla sit a</a></li>
                    <li style="list-style:none; font-weight: 100; font-size:13px"><a style="color: black;" href="/detailberita">Bioetd augue hasellus aliquam nulla sit a</a></li>
                    <li style="list-style:none; font-weight: 100; font-size:13px"><a style="color: black;" href="/detailberita">Bioetd augue hasellus aliquam nulla sit a</a></li>
                    <br>
                    <li style="list-style:none; font-weight: 100; font-size:13px"><a style="color: black;" href="/detailberita">Login to post comments</a></li>

                </ul>
        </div>
        <div class="col-lg-3">
            @include('layout.sidebar')
        </div>
    </div>
</div>
</div>
@endsection
