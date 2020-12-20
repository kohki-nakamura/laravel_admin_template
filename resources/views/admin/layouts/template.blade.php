<!--

=========================================================
* Volt - Bootstrap 5 Admin Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2020 Themesberg (https://www.themesberg.com)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.head')

<body>

	@include('admin.layouts.navbar')

	@include('admin.layouts.sidebar')

	<main class="content">
		@yield('content')
		@include('admin.layouts.footer')
	</main>

	@include('admin.layouts.include_js')

</body>

</html>
