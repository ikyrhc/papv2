<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PAP V2</title>
</head>
<!--
<frameset rows="300,*" cols="*" framespacing="0" frameborder="no" border="0">
  <frame src="/menu" name="menu" scrolling="No" noresize="noresize" id="menu" title="topFrame" />
  <frame src="/blanco" name="mainFrame" id="mainFrame" title="mainFrame" />
</frameset>
<noframes>

-->
<body>


<table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Body</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($persona as $personal)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $persona->usuario}}</td>
        <td>{{ $persona->nom}}</td>
        
    </tr>
    @endforeach
    </table>

</body>
</noframes></html>
