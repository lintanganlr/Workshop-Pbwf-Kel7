@extends('layout.main')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Daftar Ulasan</h1>
            @if($reviews->isEmpty())
                <p>Tidak ada ulasan yang tersedia.</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pembayaran</th>
                            <th>Rating</th>
                            <th>Ulasan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reviews as $index => $review)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $review->id_pembayaran }}</td>
                                <td>{{ $review->rating }}</td>
                                <td>{{ $review->ulasan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>

@endsection
