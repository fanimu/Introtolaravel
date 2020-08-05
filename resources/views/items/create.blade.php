@extends('adminlte.master')

@section('content')
	<h2>Ini Halaman Create</h2>
@endsection

@push('scripts')
	<script> 
	  var wrappers = document.getElementsByClassName('wrappers');
	  var items = ["ini","contoh"];

	  console.log("Halo ini items: ",items);
	</script>
@endpush