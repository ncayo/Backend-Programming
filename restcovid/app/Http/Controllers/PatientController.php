<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class restcovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //memakai model restcovid untuk select data
        $restcovids = restcovid::all();

        if ($restcovids) {
            $data = [
                'message' => 'Get All Resource',
                'data' => $restcovids,
            ];

            # json status code 200
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Data is Empty',
            ];

            # json status code 200
            return response()->json($data, 200);
        }
    }

   
    public function store(Request $request)
    {
        //buat validasi
        $validatedData = $request->validate([
            # kolom => rules|rules
            'name' => 'required',
            'phone' => 'numeric|required',
            'address' => 'required',
            'status' => 'required',
            'in_date_at' => 'date|required',
            'out_date_at' => 'date|required',
        ]);

        # menggunakan restcovid untuk insert data
        $restcovid = restcovid::create($validatedData);

        $data = [
            'message' => 'Resource is Added Successfully',
            'data' => $restcovid,
        ];

        # (json) status code 201
        return response()->json($data, 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //mencari data
        $restcovid = restcovid::find($id);
    
        if ($restcovid) {
            $data = [
                'message' => 'Get Detail Resource',
                'data' => $restcovid,
            ];

            # json status code 200
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Resource Not Found',
            ];

            # json status code 404
            return response()->json($data, 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //mencari data yang mau diupdate
        $restcovid = restcovid::find($id);

            if ($restcovid) {
                # mendapatkan data request
                $input = [
                    'name' => $request->name ?? $restcovid->name,
                    'phone' => $request->phone ?? $restcovid->phone,
                    'address' => $request->address ?? $restcovid->address,
                    'status' => $request->status ?? $restcovid->status,
                    'in_date_at' => $request->in_date_at ?? $restcovid->in_date_at,
                    'out_date_at' => $request->out_date_at ?? $restcovid->out_date_at,
                ];

                # mengupdate data
                $restcovid->update($input);
    
                $data = [
                    'message' => 'Resource is Update Successfully',
                    'data' => $restcovid,
                ];

                # json dengan status code 200
                return response()->json($data, 200);
            } else {
                $data = [
                    'message' => 'Resource Not Found',
                ];

                # json status code 404
                return response()->json($data, 404);
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //mencari data yang ingin dihapus
        $restcovid = restcovid::find($id);
    
            if ($restcovid) {
                # hapus data restcovid
                $restcovid->delete();
    
                $data = [
                    'message' => 'Resource is Delete Successfully',
                ];
    
                # json status code 200
                return response()->json($data, 200);
            } else {
                $data = [
                    'message' => 'Resource Not Found',
                ];
    
                # json status code 404
                return response()->json($data, 404);
            }            
    }
    public function search($name)
        {
            $restcovid = restcovid::where("name","like","%".$name."%")->get();

            if (count($restcovid)) {
                $data = [
                    'message' => 'Get Searched Resource',
                    'data' => $restcovid,
                ];

                # json status code 200

                return response()->json($data, 200);
            } else {
                $data = [
                    'message' => 'Resource Not Found',
                ];

                # json status code 404
                return response()->json($data, 404);
            }
        }

        public function status($status)
        {
            $restcovids = restcovid::where("status","like","%".$status."%")->get();
    
            $data = [
                'message' => 'Get all status resource',
                'data' => $restcovids,
            ];

            return response()->json($data, 200);
        }

        public function positive()
        {
            $restcovids = restcovid::where("status","positive")->get();

            $data = [
                'message' => 'Get Positive Resource',
                'data' => $restcovids,
            ];

            return response()->json($data, 200);
        }

        public function recovered()
        {
            $restcovids = restcovid::where("status","recovered")->get();

            $data = [
                'message' => 'Get Recovered Resource',
                'data' => $restcovids,
            ];

            return response()->json($data, 200);
        }

        public function dead()
        {
            $restcovids = restcovid::where("status","dead")->get();

            $data = [
                'message' => 'Get Dead Resource',
                'data' => $restcovids,
            ];

            return response()->json($data, 200);
        }

}
