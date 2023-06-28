<?php 
namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $pengaduan = Pengaduan::paginate(8);
        if($keyword != ""){
        $pengaduan = Pengaduan::where ('nama', 'LIKE', '%' . $keyword . '%' )->paginate (8)->setPath ( '' );
        $pagination = $pengaduan->appends ( array (
            'keyword' => $request->get('keyword') 
            ) );
        }
        // $profil = User::select('name','level')->where('level', '=', 1)->first();
        // dd($profil);
        return view('menu-admin.pengaduan.index', compact('pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}
?>

