<h1>Authors Home Page</h1>

{{ $name }}<br />
@if (isset($surname))
	{{surname}} <br />
@else
	No surname given <br />
@endif

{{ $age }}<br />
{{ $version }}<br />