<h1>Member List</h1>
<table border="1">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
    </tr>
    @foreach ($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['address']}}</td>
    </tr>
    @endforeach
</table>

<div>
    {{$members->links()}}
</div>

<style>
.w-5{
    margin: 10px;
    height: 5%;
    width: 5%;
}

</style>
