<?php 
namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $informasi = Informasi::paginate(8);
        if($keyword != ""){
        $informasi = Informasi::where ('nama', 'LIKE', '%' . $keyword . '%' )->paginate (8)->setPath ( '' );
        $pagination = $informasi->appends ( array (
            'keyword' => $request->get('keyword') 
            ) );
        }
        // $profil = User::select('name','level')->where('level', '=', 1)->first();
        // dd($profil);
        return view('menu-admin.informasi.index', compact('informasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}
?>

