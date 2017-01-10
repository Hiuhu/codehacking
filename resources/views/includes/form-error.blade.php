@if(count($errors) > 0)

    <div class="alert alert-danger text-center">

        <ul class="list-group">

            @foreach($errors->all() as $error)

                <li class="list-group-item">

                    <span class="glyphicon glyphicon-exclamation-sign"></span> {{$error}}

                </li>

            @endforeach

        </ul>

    </div>

@endif