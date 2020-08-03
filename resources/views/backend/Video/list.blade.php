@extends('backend.layouts.master')
@section('content')
 
	@foreach($data as $row)
	 <p>
	 	{{ $row->title }} - 
	 	<a href="{{ url('admin/video/edit',$row->id) }}" class="btn btn-info">Edit</a>
	 	<a href="{{ url('admin/video/del',$row->id) }}" onclick="javascript:pront('Xóa danh mục này ?')" class="btn btn-info">Delete</a>
	 </p>
	@endforeach
	<p>Phan trang:: {{ $data->links() }}</p>
@endsection()