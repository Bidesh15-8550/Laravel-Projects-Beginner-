<h1>Users Page</h1>
@include('inner')

@foreach ($users as $item )
<h3>{{ $item }}</h3>
@endforeach

<script>
    var data=@JSON $users;
    console.warn(data[0])
</script>
