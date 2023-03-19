<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\Sys_supplier;
use Illuminate\Http\Request;
// use App\Exports\ExportSuppliers;
// use App\Imports\SuppliersImport;


// use Yajra\DataTables\DataTables;
// use Excel;
// use PDF;


class SupplierController extends Controller
{
    public function create_page()
    {
        return view('suppliers/create_supplier');
    }

    public function supp_db()
    {
        $supplierss = Sys_supplier::all();
        return view('suppliers/supplier-index', compact('supplierss'));
    }
    public function store(Request $request)
    {
        $new_supliier = new Sys_supplier;
        $new_supliier->supp_code = "VD000" . rand(15, 100);
        $new_supliier->supp_name = $request->supp_name;
        $new_supliier->supp_address = $request->supp_address;
        $new_supliier->supp_telp = $request->supp_telp;

        $new_supliier->supp_cp_name = $request->supp_cp_name;

        $new_supliier->supp_cp_telp = $request->supp_cp_telp;

        $new_supliier->supp_cp_email = $request->supp_cp_email;


        // if ($request->hasFile('image')) {
        //     $this->validate($request, [
        //         'image' => 'image|mimes:jpg,png,jpeg|max:2048'
        //     ]);

        //     $location = public_path('images');
        //     $request->file('image')->move($location, $request->file('image')->getClientOriginalName());
        //     $new_supliier->image = $request->file('image')->getClientOriginalName();
        // }

        $new_supliier->save();
        return redirect('/supplier-index')->with('status', 'Postingan baru sudah ditambahkan');
    }
    public function single_supp(Request $request)
    {
        $suppliers = Sys_supplier::find($request->supp_code);
        return view('suppliers/single_supp', compact('suppliers'));
    }
    public function delete(Request $request)
    {
        $supplierss = Sys_supplier::find($request->supp_code);
        $supplierss->delete();
        return redirect('/supplier-index')->with('delete_status', 'Your blog has beeen deleted!');
    }
    public function edit_pagesupplier(Request $request)
    {
        $suppliers = Sys_supplier::find($request->supp_code);
        return view('suppliers/edit_supplier', compact('suppliers'));
    }

    public function store_edited_supplier(Request $request)
    {

        $post = Sys_supplier::find($request->supp_code);

        Sys_supplier::where('supp_code', $request->supp_code)->update([
            'supp_name' => $request->supp_name, 'supp_address' => $request->supp_address, 'supp_telp' => $request->supp_telp,

        ]);
        $post->save();

        return redirect('/supplier-index')->with('status', 'supplier sudah diperbaharui');
    }
}
