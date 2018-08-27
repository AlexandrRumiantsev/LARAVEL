<form action='{{ url('/add') }}' method="POST">
    {{ csrf_field() }}
    <input type='text' name='title'/>
    <input type='text' name='text'/>
    <input type='submit'/>
    <!-- поля формы -->
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif