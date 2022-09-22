@extends('admin.layout')
@section('content')
<div class="container" >
    <div class="row">
        <div class="col-md-9">
            <div class="card" style="width:1225px;">
                <div class="card-header bg-dark text-light " >Order</div>
                <div class="card-body">
                    
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#S</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>User name</th>
                                    <th>Total Price</th>
                                     <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $item)
                                <tr>
                                    <td>{{ $item->pid }}</td>
                                    <td>{{ $item->pname }}</td>
                                    <td>{{$item->quantity}}</td>
                                    <td>{{ $item->uname }}</td>
                                    <td>Rs.{{$item->pp * $item->quantity}}</td>
                                    
                                    <td>
                                       <form method="POST" action="{{ url('/admin/order' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Cancel Order</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection