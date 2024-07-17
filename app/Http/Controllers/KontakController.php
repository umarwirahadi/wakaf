<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KontakController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            if($request->ajax() && $request->method()=='POST'){
                $customMessage=['required'=>'field :attribute wajib diisi'];
                $validasi_data=Validator::make($request->all(),[
                    'kode_wilayah' => 'required|unique:wilayahs,kode_wilayah',
                    'nama_wilayah' => 'required',
                    'status' => 'required'
                ],$customMessage);
                if(!$validasi_data->fails()){
                    $kontak= new Kontak();
                    $kontak->full_name=$request->full_name;
                    $kontak->email=$request->email;
                    $kontak->subject=$request->subject;
                    $kontak->tanggal=$request->tanggal;
                    $kontak->message=$request->message;
                    $kontak->save();
                    return response()->json(['message'=>'Data berhasil disimpan','success'=>true],200);
                } else {
                    return response()->json(['message'=>'data yang anda isi tidk sesuai, periksa kembali form isian anda','success'=>false,'data'=>$validasi_data->errors()],422);
                }
            } 
            return redirect()->route('item.index')->with('message','terjadi kesalahan, silahkan refresh ulang');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
