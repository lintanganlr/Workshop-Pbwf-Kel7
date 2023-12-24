@extends('layout.main')
@section('content')

    @if(isset($nurse))
        <h1>Informasi Perawat</h1>
        <p>Nama Perawat: {{ $nurse->nama_medis }}</p>
        <!-- Tambahkan informasi perawat lainnya yang ingin Anda tampilkan -->
        <form action="{{ route('pembayaran.perawat', ['id' => $nurse->id]) }}" method="get">
            <!-- Pastikan $nurse->id berisi ID perawat yang ingin Anda asosiasikan -->
            @csrf
            <h1>Pilih tanggal kunjungan</h1>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" class="datepicker">
            </div>
    
            <input type="submit" value="Buat Janji">
        </form>
        @else
            <p>Nurse data is not available or ID is null.</p>
        
    @endif



    
@endsection





<!-- Memuat jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Memuat jQuery UI -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- Script untuk inisialisasi datepicker -->
<script>
    $(function() {
        $("#tanggal").datepicker({
            dateFormat: 'dd-M-yy',
            minDate: 0, // Tanggal minimum adalah hari ini
            maxDate: '+7d', // Maksimum 7 hari dari hari ini
        });
    });
</script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<!-- Javascript Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js">
</script>
<!-- Javascript Bootstrap Datepicker -->
<script
src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js">
</script>

<script type="text/javascript">
    $('.datepicker').datepicker();
    </script>