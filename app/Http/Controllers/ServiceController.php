<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Http\Controllers\PasienController;
use App\Models\TenagaMedis;
use App\Models\Service;
use App\Models\Roles;
use App\Models\Pembayaran; // Example namespace, adjust based on your actual namespace
use App\Models\Pasien;
use App\Models\Reservasi;
use Illuminate\Support\Carbon;


use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all(); // Fetch all services from the database


        return view('service', compact('services')); // Pass $services variable to the view

    }

    //CUSTOMER??
    public function formdokter(){
        return view('appoinment.dokter');
    }

    public function formperawat(){
        return view('appoinment.perawat');
    }

    // ADMIN
    public function main()
    {
        $services = Service::all();
        // $roles = Roles::all();
        return view('admin.service.main', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
public function create()
{
    // // Ambil ID role dari form nek ws di-submit
    // $roleId = request()->input('id_roles'); // Pastikan ini sesuai dengan nama input pada form

    // // Query nama tenaga medis berdasarkan role
    // $tenagaMedisByRole = TenagaMedis::where('id_roles', $roleId)->get();

    return view('admin.service.create');
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validasi input form disini sesuai dengan kebutuhan Anda
         $services = new Service();
         $services->id_roles = $request->input('id_roles');
         $services->nama_service = $request->input('nama_service');

        // Mengunggah gambar (foto pekerja)
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('serviceimg'), $imageName); // Ganti direktori tujuan
            $services->image = $imageName;
        }

        $services->save();

        return redirect()->route('service.main')->with('success', 'Data medis berhasil disimpan');
    }



    public function show(Service $services)
    {
        //
    }

    public function showForm()
    {
        $services = Service::all();

        return view('admin.service.create', compact('services'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $services = Service::find($id);
        return view('admin.service.edit', ['service' => $services]);
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, $id)
     {
         $services = Service::find($id);

         // Validasi input form disini sesuai dengan kebutuhan Anda

        //  $services->tenagamedis->nama= $request->input('nama_medis');
        $services->id_roles = $request->input('id_roles');
         $services->nama_service = $request->input('nama_service');

         // Mengunggah gambar (foto medis) jika dipilih
         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $imageName = time() . '.' . $file->getClientOriginalExtension();
             $file->move(public_path('serviceimg'), $imageName);

             // Hapus foto lama jika ada
             if (!empty($services->image)) {
                 $fotoPath = public_path('serviceimg/' . $services->image);
                 if (file_exists($fotoPath)) {
                     unlink($fotoPath);
                 } else {
                     return redirect()->back()->with('error', 'File foto medis tidak ditemukan');
                 }
             }

             $services->image = $imageName;
         }

         $services->save();

         return redirect()->route('service.main')->with('success', 'Data medis berhasil diperbarui');
     }

    public function destroy($id)
    {
        $services = Service::find($id);
        $services->delete();

        return redirect()->back();
    }
    // ServiceController.php (atau TenagaMedisController.php)

    // public function fetchDoctors()
    // {
    //     $tenagaMedis = TenagaMedis::where('id_roles', 2)->get();
    //     return view('appointment.dokter', compact('tenagaMedis'));
    // }
    // ServiceController.php

    public function fetchDoctors()
    {
        // Fetch doctors with the specified role (assuming id_roles = 2 corresponds to doctors)
        $doctors = TenagaMedis::where('id_roles', 2)->get();

        return view('appoinment.dokter', compact('doctors'));
    }
    public function fetchPerawat()
    {
        $nurses = TenagaMedis::where('id_roles', 3)->get();

        return view('appoinment.perawat', compact('nurses'));
    }



    // public function bayarDokter()
    // {
    //     $doctors = TenagaMedis::where('id_roles', 2)->get();

    //     return view('pembayaran', compact('doctors'));
    // }
    public function bayarDokter(Request $request, $id)
    {
        // Mendapatkan informasi dokter berdasarkan ID
        $doctor = TenagaMedis::findOrFail($id);
        // Kembalikan view pembayaran dengan data dokter yang sesuai

        
        // Mengambil ID Tenaga Medis yang ingin dihubungkan dengan pembayaran
        
        $id_tenagamedis = $doctor->id;
        $totalPembayaran = 100000;


        // Simpan data pembayaran ke dalam database
        $pembayaran = new \App\Models\Pembayaran();
        $pembayaran->id_tenagamedis = $id_tenagamedis;
        $pembayaran->tgl_pembayaran = now(); // Atur tanggal pembayaran sesuai dengan kebutuhan
        $pembayaran->total_pembayaran = $totalPembayaran;
        $pembayaran->status_pembayaran = 'unpaid'; // Status default saat pembayaran dibuat
        $pembayaran->id = substr(uniqid(), 0, 4);
        $pembayaran->save();

        // Creating a new Pasien instance from the request
        $patient = Pasien::create($request->all());

        /*Install Midtrans PHP Library (https://github.com/Midtrans/midtrans-php)
        composer require midtrans/midtrans-php

        Alternatively, if you are not using **Composer**, you can download midtrans-php library
        (https://github.com/Midtrans/midtrans-php/archive/master.zip), and then require
        the file manually.

        require_once dirname(__FILE__) . '/pathofproject/Midtrans.php'; */

        //SAMPLE REQUEST START HERE

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $pembayaran->id,
                'gross_amount' => $pembayaran->total_pembayaran,
            ),
            'customer_details' => array(
                'name' => $request->nama_pasien,
                'email' => $request->email_pasien,
                'phone' => $request->no_telp_pasien,
                'alamat' => $request->alamat_pasien,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // dd($snapToken) ;

        return view('pembayaran', compact('doctor', 'totalPembayaran', 'snapToken','id_tenagamedis'));



    // public function bayarPerawat($id)
    // {
    //     // Mendapatkan informasi dokter berdasarkan ID
    //     $nurse = TenagaMedis::findOrFail($id);
    //     return view('pembayaran-perawat', compact('nurse'));
    // }
    public function bayarPerawat(Request $request, $id)
    {
        // Mendapatkan informasi nurse berdasarkan ID
        $nurse = TenagaMedis::findOrFail($id);

        // Kembalikan view pembayaran dengan data dokter yang sesuai

        $totalPembayaran = 100000;

        // Simpan data pembayaran ke dalam database
        $pembayaran = new \App\Models\Pembayaran();
        $pembayaran->tgl_pembayaran = now(); // Atur tanggal pembayaran sesuai dengan kebutuhan
        $pembayaran->total_pembayaran = $totalPembayaran;
        $pembayaran->status_pembayaran = 'unpaid'; // Status default saat pembayaran dibuat
        $pembayaran->save();

        // Creating a new Pasien instance from the request
        $patient = Pasien::create($request->all());

        /*Install Midtrans PHP Library (https://github.com/Midtrans/midtrans-php)
        composer require midtrans/midtrans-php

        Alternatively, if you are not using **Composer**, you can download midtrans-php library
        (https://github.com/Midtrans/midtrans-php/archive/master.zip), and then require
        the file manually.

        require_once dirname(__FILE__) . '/pathofproject/Midtrans.php'; */

        //SAMPLE REQUEST START HERE

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $pembayaran->id,
                'gross_amount' => $pembayaran->total_pembayaran,
            ),
            'customer_details' => array(
                'name' => $request->nama_pasien,
                'email' => $request->email_pasien,
                'phone' => $request->no_telp_pasien,
                'alamat' => $request->alamat_pasien,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // dd($snapToken) ;

        return view('pembayaran-perawat', compact('nurse', 'totalPembayaran', 'snapToken'));
    }

    public function showReservationForm()
    {
        return view('reservasi');
    }


    public function processReservation(Request $request)
    {
        $tanggalTindakan = $request->input('tanggal');

        // Get the nurse ID based on the role ID (id_roles = 3 for nurses)
        $id_roles = 3; // Assuming the role ID for nurses is 3
        $nurse = TenagaMedis::where('id_roles', $id_roles)->first(); // Fetch nurse based on role ID

        if (!is_null($tanggalTindakan)) {
            $reservasi = new \App\Models\Reservasi();
            $reservasi->tgl_reservasi = now();
            $reservasi->status_reservasi = true;
            $reservasi->tgl_tindakan = $tanggalTindakan;

            if ($nurse) {
                $reservasi->id_nurse = $nurse->id; // Associate nurse ID with the reservation
            } else {
                // Handle the case where no nurse with role ID = 3 is found
                return view('reservasi')->with('error', 'Nurse not found for the specified role.');
            }

            // Melakukan penyimpanan data
            $reservasi->save();

            // Redirect ke halaman reservasi dengan pesan sukses
            return view('reservasi', compact('nurse'))->with('success', 'Reservasi berhasil dibuat!');
        } else {
            // Handle jika $tanggalTindakan kosong
            return view('reservasi', compact('nurse'))->with('error', 'Tanggal tindakan tidak valid.');
        }
    }
    












}
