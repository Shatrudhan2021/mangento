<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>First Name</td>

<td>Date</td>
</tr>
@foreach ($abc2 as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>

<td>{{ $user->created_at }}</td>
</tr>
@endforeach
</table>
</body>
</html>