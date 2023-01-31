<!DOCTYPE html>
<html>
	<head>
		<title>words for learn</title>
                <link rel="stylesheet" href="style.css">                
	</head>
	<body>
		<div class="wrapper">
                        <x-header.headerUser />
                        <div class='wrapper_middle'>
                          <x-middle.l_sidebar />
			  <main>
				{{ $slot }}
			  </main>
                          <x-middle.r_sidebar />  
                        </div>
			<x-footer.footer />
	</body>
</html>