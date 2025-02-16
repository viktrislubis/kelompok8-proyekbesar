<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    public function kurikulum(Request $request)
    {
        // Jika tidak ada parameter 'tahun', gunakan default tahun 2024
        $targetYear = $request->query("tahun", 2024); // Default ke tahun 2024

        // Ambil data kurikulum berdasarkan tahun yang ditargetkan
        $kurikulum = Kurikulum::where('tahun', $targetYear)->get();

        // Tetapkan daftar tahun yang dapat dipilih (misalnya, hanya 2014, 2019, dan 2024)
        $tahun_kurikulum = collect([
            (object) ['tahun' => 2014],
            (object) ['tahun' => 2019],
            (object) ['tahun' => 2024],
        ]);

        // Kirim data ke view
        $data = [
            "kurikulum" => $kurikulum,
            "tahun_kurikulum" => $tahun_kurikulum,
            "defaultYear" => $targetYear, // Kirim default tahun ke view
        ];

        return view('kurikulum', $data);
    }


    public function adminKurikulum()
    {
        $kurikulum = Kurikulum::orderBy('semester', 'asc')
            ->get();

        return view('admin.kurikulum.adminKurikulum')->with('kurikulum', $kurikulum);
    }

    public function addKurikulum()
    {
        return view('admin.kurikulum.adminKurikulumAdd');
    }

    public function addKurikulum_proses(Request $request)
    {
        $this->validate($request, [
            'kode' => 'required',
            'nama' => 'required',
            'semester' => 'required',
        ]);

        Kurikulum::insert([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'semester' => $request->semester,
            'sks' => $request->sks,
            'tahun' => $request->tahun,
        ]);

        return redirect('/admin/kurikulum');
    }

    public function editKurikulum($id)
    {
        $kurikulum = Kurikulum::where('id', $id)
            ->first();

        return view('admin.kurikulum.adminKurikulumEdit')->with('kurikulum', $kurikulum);
    }

    public function editKurikulum_proses(Request $request)
    {
        $this->validate($request, [
            'kode' => 'required',
            'nama' => 'required',
            'semester' => 'required',
        ]);

        Kurikulum::where('id', $request->id)
            ->update([
                'kode' => $request->kode,
                'nama' => $request->nama,
                'semester' => $request->semester,
                'sks' => $request->sks,
                'tahun' => $request->tahun,
            ]);

        return redirect('/admin/kurikulum');
    }

    public function hapusKurikulum($id)
    {
        Kurikulum::where('id', $id)
            ->delete();

        return redirect('/admin/kurikulum');
    }
}
