<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<body>
    @include('partials.navi')
    <div id="content">
		<h1>Keep Tabs On Products</h1>
		<h3>Application that serves to supervise products’ expiration dates</h3>
		&nbsp;&nbsp;&nbsp;
		<h2>Did U know..</h2>
		<p>Nowadays little do people think about food waste which is a huge problem.
		We buy too many just because of discounts without thinking if we even need it.
		As a consequence we forget about them or are not able to eat it before expiration date.
		Then we throw it away and generate more and more garbage.
		It causes an increased burden on the environment.</p>
		&nbsp;&nbsp;&nbsp;
		<h2>Let us help U rescue our planet!</h2>
		<img src="{{ URL::asset('/images/save_planet.png') }}">
	</div>
</body>
</html>