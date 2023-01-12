<?php

namespace App\Http\Controllers\API\v1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ugc;
use App\Repositories\UgcRepository;
use Illuminate\Support\Facades\Log;
use App\Models\UgcReport;


class UgcController extends Controller
{
    public function list(Request $request, UgcRepository $ugcRepo)
    {
        $ugcList = $ugcRepo->getUgcList($request->input('lang'));
        $res = $ugcRepo->assembleReasonListResponse($ugcList);

        return response($res);
    }

    public function report(Request $request)
    {

            $this->validate($request, [
                'msisdn' => 'required',
                'target'=>'required',
                'reportId' => 'required',
                'type' => 'required',
                'source' => ' required'
            ]);
            $cari = Ugc::where('id', $request->reportId)->first();
            Log::info("content ".$request->source);
            $data = [
                [
                    'reporter'=>$request->msisdn,
                    'target'=>$request->target,
                    'type'=>$request->type,
                    'content'=>$request->source,
                    'reason_id'=>$request->reportId,
                    'value'=> $cari->title
                    ]
            ];

            UgcReport::insert($data);
            return response(array('code' => 200, 'error_message' => 'Report Success', 'data' => []));


        // }

    }
}
