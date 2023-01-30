<!DOCTYPE html>
<html>
	<head>
		<title>words for learn</title>
                <link rel="stylesheet" href="style.css">                
	</head>
	<body>
		<div class="wrapper">
                        <x-header.headerUser />
			<main>
				{{ $slot }}
			</main>
			<x-footer.footer />
                </div>
	</body>
</html>