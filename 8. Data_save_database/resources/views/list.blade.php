<h1>Member List</h1>
<a href="user"><h1>Add Member</h1></a><br>
<table border="1">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>Delete</td>
    </tr>
    @foreach ($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['address']}}</td>
        <td><a href="{{'delete/'.$member['id']}}">Delete</a></td>
    </tr>
    @endforeach
</table>
