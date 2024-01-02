@extends('layouts.main')

@section('title', 'Sales')

@section('content')
<div class="content p-5">
    <div class="row">
        <div class="col-md-6">
            @php $count = 0 @endphp

            <div class="row pb-2">
                @foreach($items as $item)
                    <div class="col-lg-4">
                        <a class="btn btn-lg btn-outline-dark w-100 store-item" data-item="{{ $item->name }}" data-value="{{ $item->amount }}" data-id="{{ $item->id }}">{{ $item->name }}</a>
                    </div>

                    @php $count++ @endphp

                    @if($count % 3 == 0)
                        </div><div class="row pb-2">
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-md-6">
            <form action="{{ route('sales.store') }}" method="post">
                @csrf

                <div class="row pb-2">
                    <input type="date" name="date" id="date" class="form-control w-50 mx-auto">
                </div>

                <div class="row pb-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>QTY</th>
                                <th>ITEM</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody id="row-items">

                        </tbody>
                    </table>
                </div>

                <div class="row pb-5">
                    <button class="btn btn-outline-success btn-lg w-25 mx-auto" type="submit">SAVE</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts_after')
<script>
    $(document).ready(function() {
        var index = 0;
        $('.store-item').on('click', function() {
            var dataItem = $(this).data("item");
            var dataValue = $(this).data("value");
            var dataId = $(this).data("id");

            index += 1;
            
            var newRow = "<tr><td>" + dataItem + "</td><td>" + dataValue + "</td><td><input type='hidden' name='items["+dataId+"][]' value='"+index+"'>"+
                "<button class='btn btn-danger btn-sm delete-row'>Delete</button></td></tr>";
            $("#row-items").append(newRow);
        });

        $('#row-items').on('click', '.delete-row', function() {
            $(this).closest('tr').remove();
        });
    });
</script>
@endpush