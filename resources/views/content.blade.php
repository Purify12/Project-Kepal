<!DOCTYPE html>
<html>
<style type="text/css">
	html,body{
		padding: 0;
		margin:0;
		font-family: sans-serif;
	}
 
	.menu{
		background-color: #3141ff;
	}
 
	.menu ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}
 
	.menu > ul > li {
		float: left;
	}
 
	
	.menu li a {
		display: inline-block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
 
	.menu li a:hover{
		background-color: #2525ff;
	}
 
	li.dropdown {
		display: inline-block;
	}
 
	.dropdown:hover .isi-dropdown {
		display: block;
	}
 
	.isi-dropdown a:hover {
		color: #fff !important;
	}
 
	.isi-dropdown {
		position: absolute;
		display: none;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		background-color: #f9f9f9;
	}
 
	.isi-dropdown a {
		color: #3c3c3c !important;
	}
 
	.isi-dropdown a:hover {
		color: #232323 !important;
		background: #f3f3f3 !important;
	}
</style>

<header class="header">
	<div class="menu">
 
		
 
	</div>
</header>
	<head>
		<title text-align="center">Jadwal Kelas 13IF Hari Senin</title>
	</head>
	<body>
    
		<h3> Jadwal Hari Senin </h3>
		<table border="1" align="center">
			<tr>
				<td>Jam</td>
				<td>Kode Mata Kuliah</td>
				<td>Mata Kuliah</td>
				<td>Jenis Kuliah</td>
			</tr>
            @foreach ($tb_senin as $tb_senin)
            <tr>
				<td>{{$tb_senin->jam}}</td>
                <td>{{$tb_senin->kode_matkul}}</td>
                <td>{{$tb_senin->matkul}}</td>
                <td>{{$tb_senin->jenis_kuliah}}</td>
				
			</tr>
            @endforeach
            </table>
            </br>
            <a href="#">Next</a>

		</table>
	</body>
	
</html>