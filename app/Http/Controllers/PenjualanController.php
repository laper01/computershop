<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;
// 'penjualans.id', 'penjualans.nama_konsumen'
class PenjualanController extends Controller
{

    public function paginatedPenjualan($pageNo, $limit){
        $skip = $pageNo* $limit;
         
        $Penjualans = Penjualan::
        select(\DB::raw('penjualans.id, penjualans.tgl_penjualan, penjualans.nama_konsumen, penjualans.alamat, SUM(detail_penjualans.jumlah) as total'))
        ->leftJoin('detail_penjualans', 'penjualans.id', '=', 'detail_penjualans.id_penjualan')
        ->groupBy('penjualans.id',"penjualans.nama_konsumen", "penjualans.alamat","penjualans.tgl_penjualan" )
        ->orderBy('penjualans.tgl_penjualan', 'desc')
        ->skip($skip)
        ->take($limit)
        ->get();

        return["msg"=>"success",
                "data"=>$Penjualans];
    }

    function removeDuplicateSum($array, $key, $key2){
        $result = array();
        foreach ($array as $val) {
            if (!isset($result[$val[$key]])){
                $result[$val[$key]] = $val;
            }
            else{
                $result[$val[$key]][$key2] += $val[$key2];
            }
        }
        return $result = array_values($result); // reindex array
    }

    public function selectMonthJual($year, $month){
        $penjualan= Penjualan::
        select(\DB::raw('penjualans.id, penjualans.tgl_penjualan, penjualans.nama_konsumen, penjualans.alamat, SUM(detail_penjualans.jumlah) as total'))
        ->leftJoin('detail_penjualans', 'penjualans.id', '=', 'detail_penjualans.id_penjualan')
        ->groupBy('penjualans.id',"penjualans.nama_konsumen", "penjualans.alamat","penjualans.tgl_penjualan" )
        ->whereYear('penjualans.tgl_penjualan', $year)
        ->whereMonth('penjualans.tgl_penjualan', $month)
        ->orderBy('penjualans.tgl_penjualan', 'desc')
        ->get();
        $unique = $this->removeDuplicateSum($penjualan,'tgl_penjualan', 'total');
        return["msg"=>"success",
                "data"=>$unique];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjualan $penjualan)
    {
        //
    }
}
